<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;
use Throwable;

class PortfolioController extends Controller
{
    /**
     * Tampilkan halaman portofolio utama.
     */
    public function index(): View
    {
        $portfolio = config('portfolio');

        return view('portfolio.index', compact('portfolio'));
    }

    /**
     * Tangani pengiriman pesan dari formulir kontak.
     */
    public function contact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'subject' => ['required', 'string', 'max:200'],
            'message' => ['required', 'string', 'max:2000'],
        ], [
            'name.required' => 'Mohon isi nama kamu.',
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'subject.required' => 'Subjek pesan tidak boleh kosong.',
            'message.required' => 'Pesan belum kamu tulis.',
        ]);

        // Simpan pesan ke database jika tabel tersedia
        try {
            if (Schema::hasTable('messages')) {
                DB::table('messages')->insert([
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'subject' => $validated['subject'],
                    'message' => $validated['message'],
                    'ip_address' => $request->ip(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        } catch (Throwable $e) {
            Log::warning('Gagal menyimpan pesan kontak ke database: '.$e->getMessage());
        }

        // Catat juga ke file log aplikasi
        Log::info('Pesan Kontak Baru:', $validated);

        return back()
            ->with('status', 'success')
            ->with('message', 'Terima kasih telah menyapa! Pesanmu sudah tersampaikan dan Tiara akan membalas segera ✨');
    }
}
