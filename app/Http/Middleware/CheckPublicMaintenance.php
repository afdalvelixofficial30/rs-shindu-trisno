<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;

class CheckPublicMaintenance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // 1. Cek status Website Utama di tabel settings
        $status = Setting::where('key', 'public.home')
                        ->where('group', 'Operasional')
                        ->first();

        // Jika status ada dan nilainya '0' (Dev Mode / Maintenance)
        if ($status && $status->value === '0') {
            
            // 2. Pastikan kita tidak memblokir akses ke Admin Panel atau Master Control
            $path = $request->path();
            $isRestricted = !str_starts_with($path, 'panel-admin') && 
                            !str_starts_with($path, 'master-control-v25-rahasia') &&
                            !str_starts_with($path, 'admin/login') &&
                            !str_starts_with($path, 'api/');

            if ($isRestricted) {
                return response()->view('errors.maintenance', [], 503);
            }
        }

        return $next($request);
    }
}
