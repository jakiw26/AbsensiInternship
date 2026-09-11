<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <title>Laporan Internship - {{ $user->name }}</title>

    <style>
        @page {
            margin: 25px 30px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
            color: #111827;
            line-height: 1.5;
        }

        .container {
            width: 100%;
            position: relative;
        }

        /* =====================================================
            BACKGROUND KERTAS BTS.ID
        ====================================================== */

        .page-background {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 430px;
            height: auto;
            transform: translate(-50%, -50%);
            opacity: 0.05;
            z-index: -1;
        }

        /* =====================================================
            HEADER
        ====================================================== */

        .header {
            width: 100%;
            border-bottom: 2px solid #111827;
            padding-bottom: 12px;
            margin-bottom: 20px;
        }

        .header-table {
            width: 100%;
            border-collapse: collapse;
        }

        .header-logo {
            width: 70px;
            vertical-align: middle;
        }

        .header-logo img {
            width: 60px;
            height: auto;
        }

        .header-title {
            vertical-align: middle;
            padding-left: 10px;
        }

        .header-title h1 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
            color: #111827;
        }

        .header-title p {
            margin: 3px 0 0;
            font-size: 10px;
            color: #6b7280;
        }

        /* =====================================================
            SECTION
        ====================================================== */

        .section {
            margin-bottom: 18px;
        }

        .section-title {
            margin: 0 0 8px;
            padding-bottom: 5px;
            font-size: 13px;
            font-weight: bold;
            color: #111827;
            border-bottom: 1px solid #d1d5db;
        }

        /* =====================================================
            IDENTITAS
        ====================================================== */

        .identity-table {
            width: 100%;
            border-collapse: collapse;
        }

        .identity-table td {
            padding: 5px 0;
            vertical-align: top;
        }

        .identity-label {
            width: 25%;
            font-weight: bold;
            color: #374151;
        }

        .identity-separator {
            width: 3%;
        }

        .identity-value {
            width: 72%;
        }

        /* =====================================================
            REKAP KEHADIRAN
        ====================================================== */

        .summary-table {
            width: 100%;
            border-collapse: collapse;
        }

        .summary-card {
            width: 25%;
            padding: 10px;
            text-align: center;
            border: 1px solid #e5e7eb;
        }

        .summary-number {
            display: block;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 2px;
        }

        .summary-label {
            font-size: 10px;
            color: #6b7280;
        }

        /* =====================================================
            DETAIL ABSENSI
        ====================================================== */

        .attendance-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }

        .attendance-table th {
            padding: 7px 6px;
            background: #111827;
            color: #ffffff;
            border: 1px solid #111827;
            font-size: 10px;
            text-align: center;
        }

        .attendance-table td {
            padding: 6px;
            border: 1px solid #d1d5db;
            font-size: 10px;
            text-align: center;
        }

        .attendance-table td.left {
            text-align: left;
        }

        .attendance-table tr {
            page-break-inside: avoid;
        }

        /* =====================================================
            STATUS ABSENSI
        ====================================================== */

        .status {
            display: inline-block;
            padding: 2px 7px;
            border-radius: 10px;
            font-size: 9px;
            font-weight: bold;
        }

        .status-hadir {
            color: #166534;
            background: #dcfce7;
        }

        .status-sakit {
            color: #92400e;
            background: #fef3c7;
        }

        .status-izin {
            color: #1e40af;
            background: #dbeafe;
        }

        .status-alfa {
            color: #991b1b;
            background: #fee2e2;
        }

        /* =====================================================
            PENILAIAN
        ====================================================== */

        .score-table {
            width: 100%;
            border-collapse: collapse;
        }

        .score-table td {
            width: 33.33%;
            padding: 10px;
            border: 1px solid #e5e7eb;
            text-align: center;
        }

        .score-label {
            display: block;
            margin-bottom: 5px;
            font-size: 10px;
            color: #6b7280;
        }

        .score-value {
            display: block;
            font-size: 20px;
            font-weight: bold;
            color: #111827;
        }

        /* =====================================================
            CATATAN
        ====================================================== */

        .note-box {
            padding: 12px;
            border: 1px solid #d1d5db;
            background: #ffffff;
            font-size: 10px;
            line-height: 1.6;
        }

        .note-title {
            margin: 0 0 6px;
            font-size: 12px;
            font-weight: bold;
            color: #111827;
        }

        .note-text {
            margin: 0;
            color: #6b7280;
        }

        /* =====================================================
            TANDA TANGAN
        ====================================================== */

        .signature-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        .signature-left {
            width: 60%;
        }

        .signature-right {
            width: 40%;
            text-align: center;
            vertical-align: top;
        }

        .signature-title {
            margin-bottom: 8px;
            font-size: 11px;
            text-align: center;
        }

        .signature-space {
            width: 100%;
            height: 80px;
            text-align: center;
        }

        .signature-image {
            width: 120px;
            height: auto;
            display: inline-block;
            margin-top: 5px;
        }

        .signature-name {
            margin-top: 5px;
            font-size: 11px;
            font-weight: bold;
            text-align: center;
        }

        .signature-role {
            margin-top: 3px;
            font-size: 10px;
            text-align: center;
        }

        /* =====================================================
            COVER
        ====================================================== */

        .cover {
            height: 700px;
            position: relative;
            text-align: center;
            page-break-after: always;
        }

        .cover-content {
            position: relative;
            z-index: 2;
            padding-top: 150px;
        }

        .cover-logo {
            width: 130px;
            height: auto;
            margin-bottom: 30px;
        }

        .cover-title {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
            color: #111827;
        }

        .cover-subtitle {
            margin-top: 10px;
            font-size: 14px;
            color: #6b7280;
        }

        .cover-line {
            width: 120px;
            margin: 25px auto;
            border-top: 2px solid #111827;
        }

        .cover-name {
            margin-top: 30px;
            font-size: 18px;
            font-weight: bold;
            color: #111827;
        }

        .cover-company {
            margin-top: 10px;
            font-size: 13px;
            color: #6b7280;
        }

        .cover-footer {
            position: absolute;
            bottom: 40px;
            left: 0;
            width: 100%;
            font-size: 10px;
            color: #6b7280;
        }

        .footer {
            width: 100%;
            margin-top: 30px;
            padding-top: 8px;
            border-top: 1px solid #d1d5db;
            text-align: center;
            font-size: 9px;
            color: #6b7280;
            line-height: 1.4;
        }

        /* =====================================================
            PAGE BREAK
        ====================================================== */

        .page-break {
            page-break-before: always;
        }

        .avoid-break {
            page-break-inside: avoid;
        }
    </style>
</head>

<body>

    {{-- =====================================================
        BACKGROUND KERTAS BTS.ID
    ====================================================== --}}

    @if (file_exists(public_path('images/bts.png')))
        <img src="{{ public_path('images/bts.png') }}" alt="Background BTS.id" class="page-background">
    @endif


    <div class="container">

        {{-- =====================================================
            HEADER
        ====================================================== --}}

        <div class="header">

            <table class="header-table">

                <tr>

                    <td class="header-logo">

                        @if (file_exists(public_path('images/bts.png')))
                            <img src="{{ public_path('images/bts.png') }}" alt="BTS">
                        @endif

                    </td>

                    <td class="header-title">

                        <h1>
                            LAPORAN INTERNSHIP
                        </h1>

                        <p>
                            Laporan kegiatan dan hasil penilaian peserta internship
                        </p>

                    </td>

                </tr>

            </table>

        </div>


        {{-- =====================================================
            IDENTITAS PESERTA
        ====================================================== --}}

        <div class="section">

            <h2 class="section-title">
                Identitas Peserta
            </h2>

            <table class="identity-table">

                <tr>

                    <td class="identity-label">
                        Nama
                    </td>

                    <td class="identity-separator">
                        :
                    </td>

                    <td class="identity-value">
                        {{ $user->name ?? '-' }}
                    </td>

                </tr>

                <tr>

                    <td class="identity-label">
                        Email
                    </td>

                    <td class="identity-separator">
                        :
                    </td>

                    <td class="identity-value">
                        {{ $user->email ?? '-' }}
                    </td>

                </tr>

                <tr>

                    <td class="identity-label">
                        Program
                    </td>

                    <td class="identity-separator">
                        :
                    </td>

                    <td class="identity-value">
                        Internship
                    </td>

                </tr>

                <tr>

                    <td class="identity-label">
                        Tanggal Cetak
                    </td>

                    <td class="identity-separator">
                        :
                    </td>

                    <td class="identity-value">
                        {{ now()->translatedFormat('d F Y') }}
                    </td>

                </tr>

            </table>

        </div>


        {{-- =====================================================
            REKAP KEHADIRAN
        ====================================================== --}}

        <div class="section">

            <h2 class="section-title">
                Rekap Kehadiran
            </h2>

            <table class="summary-table">

                <tr>

                    <td class="summary-card">

                        <span class="summary-number">
                            {{ $jumlahHadir }}
                        </span>

                        <span class="summary-label">
                            Hadir
                        </span>

                    </td>

                    <td class="summary-card">

                        <span class="summary-number">
                            {{ $jumlahSakit }}
                        </span>

                        <span class="summary-label">
                            Sakit
                        </span>

                    </td>

                    <td class="summary-card">

                        <span class="summary-number">
                            {{ $jumlahIzin }}
                        </span>

                        <span class="summary-label">
                            Izin
                        </span>

                    </td>

                    <td class="summary-card">

                        <span class="summary-number">
                            {{ $jumlahAlfa }}
                        </span>

                        <span class="summary-label">
                            Alfa
                        </span>

                    </td>

                </tr>

            </table>

        </div>


        {{-- =====================================================
            DETAIL KEHADIRAN
        ====================================================== --}}

        <div class="section">

            <h2 class="section-title">
                Detail Kehadiran
            </h2>

            <table class="attendance-table">

                <thead>

                    <tr>

                        <th width="7%">
                            No
                        </th>

                        <th width="20%">
                            Tanggal
                        </th>

                        <th width="20%">
                            Jam Masuk
                        </th>

                        <th width="20%">
                            Jam Pulang
                        </th>

                        <th width="33%">
                            Status
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse ($absensis as $index => $absensi)
                        <tr>

                            <td>
                                {{ $index + 1 }}
                            </td>

                            <td>
                                {{ \Carbon\Carbon::parse($absensi->tanggal)->translatedFormat('d F Y') }}
                            </td>

                            <td>
                                {{ $absensi->jam_masuk ?? '-' }}
                            </td>

                            <td>
                                {{ $absensi->jam_pulang ?? '-' }}
                            </td>

                            <td>

                                @if ($absensi->status === 'hadir')
                                    <span class="status status-hadir">
                                        Hadir
                                    </span>
                                @elseif ($absensi->status === 'sakit')
                                    <span class="status status-sakit">
                                        Sakit
                                    </span>
                                @elseif ($absensi->status === 'izin')
                                    <span class="status status-izin">
                                        Izin
                                    </span>
                                @elseif ($absensi->status === 'alfa')
                                    <span class="status status-alfa">
                                        Alfa
                                    </span>
                                @else
                                    <span class="status">
                                        {{ ucfirst($absensi->status ?? '-') }}
                                    </span>
                                @endif

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5">
                                Belum ada data kehadiran.
                            </td>

                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>


        {{-- =====================================================
            HASIL PENILAIAN
        ====================================================== --}}

        <div class="section">

            <h2 class="section-title">
                Hasil Penilaian
            </h2>

            <table class="score-table">

                <tr>

                    <td>

                        <span class="score-label">
                            Kedisiplinan
                        </span>

                        <span class="score-value">
                            {{ $nilai->kedisiplinan ?? '-' }}
                        </span>

                    </td>

                    <td>

                        <span class="score-label">
                            Keterampilan
                        </span>

                        <span class="score-value">
                            {{ $nilai->keterampilan ?? '-' }}
                        </span>

                    </td>

                    <td>

                        <span class="score-label">
                            Skill
                        </span>

                        <span class="score-value">
                            {{ $nilai->skill ?? '-' }}
                        </span>

                    </td>

                </tr>

            </table>

        </div>


        {{-- =====================================================
            CATATAN
        ====================================================== --}}

        <div class="section avoid-break">

            <div class="note-box">

                <h2 class="note-title">
                    Catatan
                </h2>

                <p class="note-text">

                    Laporan ini merupakan rekap kehadiran dan hasil
                    penilaian peserta selama menjalani program
                    internship. Data pada laporan diambil dari sistem
                    absensi dan penilaian internship.

                </p>

            </div>

        </div>


        {{-- =====================================================
            TANDA TANGAN
        ====================================================== --}}

        <table class="signature-table">
            <tr> {{-- KOLOM KOSONG --}} <td class="signature-left"></td> {{-- KOLOM TANDA TANGAN --}} <td
                    class="signature-right">
                    <div class="signature-title"> Pembimbing </div>
                    <div class="signature-space">
                        @if (file_exists(public_path('images/ttd.jpeg')))
                            <img src="{{ public_path('images/ttd.jpeg') }}" alt="TTD Pembimbing"
                                class="signature-image">
                        @endif
                    </div>
                    <div class="signature-name"> Pimpinan BTS.id </div>
                    <div class="signature-role"> Pembimbing Internship </div>
                </td>
            </tr>
        </table>

        {{-- =====================================================
            FOOTER
        ====================================================== --}}

        <div class="footer">

            Laporan Internship &bull;
            Dicetak pada {{ now()->translatedFormat('d F Y H:i') }}

        </div>

    </div>

</body>

</html>
