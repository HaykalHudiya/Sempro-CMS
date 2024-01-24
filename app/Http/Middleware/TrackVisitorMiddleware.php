<?php

namespace App\Http\Middleware;

use App\Models\visitor;
use Closure;
use Illuminate\Support\Facades\Log;

// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

class TrackVisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        Log::info('Middleware TrackVisitorMiddleware is running');
        // $ip = $request->ip();

        // // Cek apakah alamat IP sudah ada dalam database
        // $visitor = Visitor::where('ip_address', $ip)->first();

        // if ($visitor) {
        //     // Jika alamat IP sudah ada, tidak ada tindakan tambahan yang diperlukan
        // } else {
        //     // Jika alamat IP belum ada, tambahkan entri baru ke database
        //     Visitor::create(['ip_address' => $ip]);
        // }

        // return $next($request);
        $ip = $request->ip();
        visitor::updateOrcreate(['ip_address' => $ip]); //Berfungsi untuk mentracking visitor yang mengunjungi website dan route di kelompokkan.

        return $next($request);
    }
}
