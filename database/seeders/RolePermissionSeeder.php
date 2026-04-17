<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // ─── Define Permissions ───────────────────────────────────────────
        $permissions = [
            // Manajemen Medis
            'view poliklinik',    'create poliklinik',    'edit poliklinik',    'delete poliklinik',
            'view doctor',        'create doctor',        'edit doctor',        'delete doctor',

            // Publikasi
            'view post',          'create post',          'edit post',          'delete post',

            // Layanan Mandiri
            'view mcu_package',   'create mcu_package',   'edit mcu_package',   'delete mcu_package',

            // Pengaturan
            'view setting',       'create setting',       'edit setting',       'delete setting',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        // ─── Create Roles & Assign Permissions ───────────────────────────

        // Super Admin: full access (skip explicit permissions, uses gate bypass)
        $superAdmin = Role::firstOrCreate(['name' => 'Super Admin', 'guard_name' => 'web']);
        $superAdmin->givePermissionTo(Permission::all());

        // Admin Yanmed: Poliklinik + Doctor only
        $adminYanmed = Role::firstOrCreate(['name' => 'Admin Yanmed', 'guard_name' => 'web']);
        $adminYanmed->syncPermissions([
            'view poliklinik', 'create poliklinik', 'edit poliklinik', 'delete poliklinik',
            'view doctor',     'create doctor',     'edit doctor',     'delete doctor',
        ]);

        // Admin Humas: Post only
        $adminHumas = Role::firstOrCreate(['name' => 'Admin Humas', 'guard_name' => 'web']);
        $adminHumas->syncPermissions([
            'view post', 'create post', 'edit post', 'delete post',
        ]);

        // Admin MCU: MCU Package only
        $adminMcu = Role::firstOrCreate(['name' => 'Admin MCU', 'guard_name' => 'web']);
        $adminMcu->syncPermissions([
            'view mcu_package', 'create mcu_package', 'edit mcu_package', 'delete mcu_package',
        ]);

        // ─── Create Default Super Admin User ──────────────────────────────
        $superAdminUser = User::firstOrCreate(
            ['email' => 'superadmin@rssindhu.id'],
            [
                'name'     => 'Super Administrator',
                'password' => Hash::make('password123'),
            ]
        );
        $superAdminUser->assignRole('Super Admin');

        $this->command->info('✅ Roles, Permissions, dan Super Admin berhasil dibuat!');
        $this->command->table(
            ['Role', 'Permissions'],
            [
                ['Super Admin',  'Semua permissions'],
                ['Admin Yanmed', 'Poliklinik + Doctor'],
                ['Admin Humas',  'Post (Berita)'],
                ['Admin MCU',    'MCU Package'],
            ]
        );
    }
}
