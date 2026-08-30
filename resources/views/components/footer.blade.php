<footer class="bg-white border-t border-gray-100 mt-auto py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Brand Info -->
            <div class="col-span-1 md:col-span-1">
                <a href="{{ url('/') }}" class="flex items-center gap-3 mb-4 text-decoration-none">
                    <div class="w-8 h-8 rounded-xl flex items-center justify-center text-white font-bold text-sm" style="background-color: #7CA982;">
                        NC
                    </div>
                    <span class="text-lg font-bold text-gray-800">
                        Nurse<span style="color: #7CA982;">Connect</span>
                    </span>
                </a>
                <p class="text-xs text-gray-500 leading-relaxed">
                    Platform *on-demand home care* profesional untuk menjembatani perawat tersertifikasi dengan pasien di rumah secara aman dan fleksibel.
                </p>
            </div>

            <!-- Layanan Utama -->
            <div>
                <h4 class="text-sm font-semibold text-gray-800 mb-3">Layanan Utama</h4>
                <ul class="space-y-2 text-sm p-0 list-unstyled">
                    <li><a href="#" class="text-gray-500 hover:text-[#7CA982] transition-colors">Rawat Pasca-Inap</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#7CA982] transition-colors">Pendampingan Lansia</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#7CA982] transition-colors">Tindakan Medis Ringan</a></li>
                </ul>
            </div>

            <!-- Karir Perawat -->
            <div>
                <h4 class="text-sm font-semibold text-gray-800 mb-3">Karir Perawat</h4>
                <ul class="space-y-2 text-sm p-0 list-unstyled">
                    <li><a href="#" class="text-gray-500 hover:text-[#7CA982] transition-colors">Daftar Mitra Perawat</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#7CA982] transition-colors">Syarat STR & Ijazah</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#7CA982] transition-colors">Pengaturan Slot Waktu</a></li>
                </ul>
            </div>

            <!-- Jaminan Keamanan -->
            <div>
                <h4 class="text-sm font-semibold text-gray-800 mb-3">Jaminan Keamanan</h4>
                <div class="p-4 rounded-2xl bg-gray-50 border border-gray-100">
                    <div class="flex items-center gap-2 font-medium text-sm mb-1" style="color: #7CA982;">
                        <i class="bi bi-patch-check-fill"></i>
                        <span>100% Terverifikasi HRD</span>
                    </div>
                    <p class="text-xs text-gray-500 m-0">
                        Seluruh perawat melewati pemeriksaan keabsahan STR & Dikti sebelum aktif.
                    </p>
                </div>
            </div>

        </div>

        <div class="border-t border-gray-100 mt-8 pt-6 text-center text-xs text-gray-400">
            &copy; {{ date('Y') }} NurseConnect. All rights reserved.
        </div>
    </div>
</footer>