<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /**
     * Test halaman utama portofolio dapat diakses dengan sukses.
     */
    public function test_portfolio_page_can_be_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Tiara Ariyanto Putri');
        $response->assertSee('Software Engineer');
        $response->assertSee('IPB University');
        $response->assertSee('Sekretariat Daerah Kota Depok');
    }

    /**
     * Test form kontak berhasil memproses pesan yang valid.
     */
    public function test_contact_form_submits_successfully_with_valid_data(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Recruiter Tech',
            'email' => 'hr@techcompany.com',
            'subject' => 'Undangan Interview Software Engineer & UI/UX',
            'message' => 'Halo Tiara, kami tertarik dengan portofolio dan pengalaman magangmu di Setda Depok. Bisakah kita jadwalkan sesi interview minggu ini?',
        ]);

        $response->assertSessionHas('status', 'success');
        $response->assertSessionHas('message');
        $response->assertRedirect('/');
    }

    /**
     * Test form kontak memvalidasi input wajib.
     */
    public function test_contact_form_validates_required_fields(): void
    {
        $response = $this->post('/contact', [
            'name' => '',
            'email' => 'invalid-email',
            'subject' => '',
            'message' => '',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
    }
}
