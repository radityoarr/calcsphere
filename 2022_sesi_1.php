<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembahasan Soal Tahun 2023 Sesi 1 - Calc-Sphere</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function createSignChart(symbol1, symbol2, symbol3, value1, value2) {
            const svg = `
                <svg width="500" height="100">
                    <!-- Line with arrow -->
                    <line x1="50" y1="50" x2="450" y2="50" stroke="black" stroke-width="2" marker-end="url(#arrowhead)"/>
                    
                    <!-- Arrowhead definition -->
                    <defs>
                        <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="10" refY="3.5" orient="auto">
                            <polygon points="0 0, 10 3.5, 0 7" fill="black"/>
                        </marker>
                    </defs>
                    
                    <!-- Tick marks -->
                    <line x1="150" y1="40" x2="150" y2="60" stroke="black" stroke-width="2"/>
                    <line x1="300" y1="40" x2="300" y2="60" stroke="black" stroke-width="2"/>
                    
                    <!-- Labels -->
                    <text x="30" y="30" class="chart-text">f'(x)</text>
                    <text x="460" y="30" class="chart-text">f'(x)</text>
                    <text x="140" y="80" class="chart-text">${value1}</text>
                    <text x="290" y="80" class="chart-text">${value2}</text>
                    <text x="50" y="80" class="chart-text">-∞</text>
                    <text x="420" y="80" class="chart-text">+∞</text>
                    
                    <!-- Plus and Minus symbols -->
                    <text x="75" y="30" class="chart-text">${symbol1}${symbol1}${symbol1}</text>
                    <text x="200" y="30" class="chart-text">${symbol2}${symbol2}${symbol2}</text>
                    <text x="340" y="30" class="chart-text">${symbol3}${symbol3}${symbol3}</text>
                </svg>
            `;
            document.getElementById('chart-container').innerHTML = svg;
        }

        // Call the function with the specified input
        createSignChart('+', '+', '-', 0, 3);
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        .content {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .section-title {
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
        .answer {
            margin-left: 20px;
            font-style: italic;
        }
        img {
            width: 100%;
            max-width: 600px;
            display: block;
            margin: 10px auto;
        }
        .chart-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
        }
        .chart-text {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        .formula {
            font-family: 'Courier New', monospace;
            background-color: #f9f9f9;
            padding: 5px;
            border-radius: 5px;
            display: inline-block;
        }

    </style>
</head>
<body>
    <h1>CALC-SPHERE BE SMART WITH US</h1>
    <div class="content">
        <p>Pembahasan Soal Tahun 2023 Sesi 1</h2>
        <ol>
            <li>
                Diberikan \( f(x) = \dfrac{x^2 - 3x + 2}{|x| - 2} \).
                <ol type="a">
                    <li>
                        Dapatkan semua \( x \) dimana \( f \) diskontinu.
                        <div class="answer">
                            <p>Fungsi \( f(x) = \dfrac{x^2 - 3x + 2}{|x| - 2} \) memiliki penyebut yang melibatkan nilai absolut dari \( x \). Untuk mengetahui titik-titik diskontinuitas, kita mencari nilai-nilai \( x \) dimana penyebut menjadi nol, yaitu:</p>
                            <p>\[
                            |x| - 2 = 0
                            \]</p>
                            <p>Sehingga \( |x| = 2 \). Hal ini memberikan dua kemungkinan:</p>
                            <ul>
                                <li>Jika \( x = 2 \), maka penyebut menjadi nol.</li>
                                <li>Jika \( x = -2 \), maka penyebut juga menjadi nol.</li>
                            </ul>
                            <p>Oleh karena itu, fungsi \( f(x) \) diskontinu pada \( x = 2 \) dan \( x = -2 \).</p>
                        </div>
                    </li>
                    <li>
                        Apakah diskontinuitas pada titik yang diperoleh dari soal (a) dapat dihilangkan? Jelaskan.
                        <div class="answer">
                            <p>Periksa kembali nilai limit untuk fungsi pada kedua titik diskontinu \( x = -2\) dan \( x = 2 \)</p>    
                            
                            \[
                            \begin{align}
                                \lim_{x \to -2} f(x) &= \lim_{x \to -2} \frac{(x-1)(x-2)}{(-x - 2)} = \text{ tidak ada} \\
                                \lim_{x \to 2} f(x) &= \lim_{x \to 2} \frac{(x-1)(x-2)}{(x - 2)} = 1
                            \end{align}
                            \]
                            <p>Oleh karena itu titik diskontinu yang dapat dihilangkan hanya \( x = 2\) dengan cara menambah definisi di fungsi untuk \( f(2) = 1\) karena tidak terdefinisi</p>
                        </div>
                    </li>
                </ol>
            </li>
            <li>
                Diberikan fungsi \( y = \dfrac{2x^2y+3x-4}{x-y}\)
                <ol type="a">
                    <li>
                        Dapatkan \( \dfrac{dy}{dx}\) dari fungsi tersebut
                        <p>
                            \[
                            y = \frac{2x^2 y + 3x - 4}{x - y}
                            \]
                        </p>
                
                        <p>Turunkan kedua sisi persamaan terhadap \( x \):</p>
                        <p>
                            \[
                            \frac{dy}{dx} = \frac{(4x y + 2x^2 \frac{dy}{dx} + 3)(x - y) - (2x^2 y + 3x - 4)(1 - \frac{dy}{dx})}{(x - y)^2}
                            \]
                        </p>
                    </li>
                    <li>
                        Dapatkan Persamaan Garis Singgung pada Titik \( \left( \dfrac{4}{3}, 0 \right)\)
                        <div class="answer">
                            <p>Pertama, substitusikan \( x = \frac{4}{3} \) dan \( y = 0 \) ke dalam turunan \( \frac{dy}{dx} \) yang diperoleh di bagian (a) untuk menemukan kemiringan (slope) di titik ini.</p>
                            \[
                            \begin{align}
                            \dfrac{dy}{dx} &= \dfrac{(4(4/3)0 + 2(4/3)^2\dfrac{dy}{dx}+3)(4/3-0) - (2(4/3)^20 + 3(4/3)- 4)(1-\dfrac{dy}{dx})}{(4/3 - 0)^2}\\
                            \dfrac{dy}{dx} &= \dfrac{(32/9 \dfrac{dy}{dx}+ 3)(4/3) - 0(1-\dfrac{dy}{dx})}{16/9}\\
                            \dfrac{dy}{dx} &= -1.35

                            \end{align}
                            \]
                            <p>Kemiringan di \( \left( \frac{4}{3}, 0 \right) \) adalah \( -1.35 \). Maka persamaan garis singgung pada titik ini adalah:</p>
                            <p>
                                \[
                                y - 0 = -1.35 \left( x - \frac{4}{3} \right)
                                \]
                            </p>
                        </div>
                    </li>
                </ol>
            </li>
            <li>
                <p>Diberikan fungsi  \[ f(x) = 5 + 4x^3 - x^4 \]</p>
                <ol type="a">
                    <li>Tentukan selang dimana fungsi \( f(x) \) naik dan \( f(x) \) turun.</li>
                        <div class="answer">
                        <p>Turunkan fungsi \( f(x) \) untuk mendapatkan \( f'(x) \):</p>
                        <p>
                            \[
                            f'(x) = 12x^2 - 4x^3 = 4x^2(3 - x)
                            \]
                        </p>
                        <p>Pembuat nol \( f'(x) = 0 \) adalah \( x = 0 \) dan \( x = 3 \). Dengan menggunakan garis bilangan:</p>
                        <p> 
                            \[
                            \begin{array}{c|c|c|c}
                            x & (-\infty, 0) & (0, 3) & (3, +\infty) \\
                            f'(x) & + & + & - \\
                            \end{array}
                            \]
                        </p>
                        <p>Maka:</p>
                        <ul>
                            <li>Fungsi naik pada selang \( (-\infty, 0) \cup (0, 3) \)</li>
                            <li>Fungsi turun pada selang \( (3, +\infty) \)</li>
                        </ul>
                        </div>
                    <li>Tentukan titik stasioner dan titik belok.</li>
                        <div class="answer">
                        <p>Titik stasioner terjadi saat \( f'(x) = 0 \). Dari perhitungan di atas, \( f'(x) = 0 \) pada \( x = 0 \) dan \( x = 3 \). Substitusi ke \( f(x) \):</p>
                        <ul>
                            <li>\( f(0) = 5 + 4(0)^3 - (0)^4 = 5 \), sehingga titik stasioner adalah \( (0, 5) \).</li>
                            <li>\( f(3) = 5 + 4(3)^3 - (3)^4 = 32 \), sehingga titik stasioner adalah \( (3, 32) \).</li>
                        </ul>
                        <p>Untuk titik belok, cari \( f''(x) \):</p>
                        <p>
                            \[
                            f''(x) = 24x - 12x^2 = 12x(2 - x)
                            \]
                        </p>
                        <p>Pembuat nol \( f''(x) = 0 \) adalah \( x = 0 \) dan \( x = 2 \). Substitusi ke \( f(x) \):</p>
                        <ul>
                            <li>\( f(0) = 5 \), sehingga \( (0, 5) \) adalah titik belok.</li>
                            <li>\( f(2) = 5 + 4(2)^3 - (2)^4 = 21 \), sehingga \( (2, 21) \) adalah titik belok.</li>
                        </ul>
                        </div>
                    <li>Tentukan selang dimana fungsi \( f(x) \) cekung ke atas dan cekung ke bawah.</li>
                        <div class="answer">
                        <p>Untuk kecekungan fungsi:</p>
                        <ul>
                            <li>Fungsi cekung ke atas jika \( f''(x) > 0 \), yaitu pada \( (0, 2) \).</li>
                            <li>Fungsi cekung ke bawah jika \( f''(x) < 0 \), yaitu pada \( (-\infty, 0) \cup (2, +\infty) \).</li>
                        </ul>
                        </div>
                    <li>Sketsa grafik \( f(x) \).</li>
                        <div class="answer">
                        <p>Sketsa grafik fungsi \( f(x) \) dapat dibuat berdasarkan informasi di atas:</p>
                        <ul>
                            <li>Titik stasioner: \( (0, 5) \), \( (3, 32) \).</li>
                            <li>Titik belok: \( (0, 5) \), \( (2, 21) \).</li>
                            <li>Selang naik: \( (-\infty, 0) \cup (0, 3) \).</li>
                            <li>Selang turun: \( (3, +\infty) \).</li>
                        </ul>
                        <p>Grafik memiliki bentuk umum seperti berikut:</p>
                        <ol>
                            <li>Dimulai naik dari \( (-\infty, 0) \).</li>
                            <li>Cekung ke bawah dari \( (-\infty, 0) \), lalu cekung ke atas dari \( (0, 2) \).</li>
                            <li>Menurun setelah \( x = 3 \) dengan cekung ke bawah lagi pada \( (2, +\infty) \).</li>
                        </ol>                
                        <p>Berikut adalah visualisasi grafik \( f(x) \) menggunakan alat grafik:</p>
                        </div>
                </ol>
            </li>
            <li>
                <p>Tentukan ukuran tabung dengan isi terbesar yang dapat dibentuk dalam bola yang berjari jari 21</p>
                <p>
                    Kita akan mencari ukuran tabung dengan isi terbesar yang dapat dibentuk dari bola dengan jari-jari 2 satuan.
                </p>
            
                <div class="answer">
                    <p>Langkah 1: Identifikasi Masalah</p>
                    <p>
                        Volume tabung dinyatakan sebagai:
                        <span class="formula">V = πr²h</span>, di mana <i>r</i> adalah jari-jari alas dan <i>h</i> adalah tinggi tabung.
                    </p>
                    <p>
                        Karena tabung berada di dalam bola berjari-jari <i>R = 2</i>, tinggi <i>h</i> dapat dihitung menggunakan geometri bola:
                        <span class="formula">h = 2√(R² - r²)</span>.
                    </p>
                </div>
            
                <div class="answer">
                    <p>Langkah 2: Substitusi dan Penyederhanaan</p>
                    <p>
                        Substitusi <i>h</i> ke dalam rumus volume tabung:
                    </p>
                    <p class="formula">V = πr²(2√(R² - r²)) = 2πr²√(R² - r²)</p>
                </div>
            
                <div class="answer">
                    <p>Langkah 3: Cari Maksimum Volume</p>
                    <p>
                        Untuk memaksimalkan volume, kita perlu mencari turunan pertama dari <i>V</i> terhadap <i>r</i>:
                    </p>
                    <p> \[
                        dV/dr = 2π [2r√(R² - r²) - (r³ / √(R² - r²))]\]
                    </p>
                    <p>
                        Nilai kritis ditemukan ketika turunan ini sama dengan nol. Setelah disederhanakan, kita mendapatkan:
                    </p>
                    <p> \[R² - 3r² = 0 \]</p>
                    <p>
                        Dari sini, solusi untuk <i>r</i> adalah:
                    </p>
                    <p> \[r = √(R² / 3) = √(4 / 3) \]</p>
                </div>
            
                <div class="answer">
                    <p>Langkah 4: Verifikasi dan Substitusi</p>
                    <p>
                        Dengan <i>r = √(4/3)</i>, kita dapat menghitung <i>h</i> menggunakan rumus tinggi:
                    </p>
                    <p> \[h = 2√(4 - 4/3) = 2√(8/3)\]</p>
                    <p>
                        Volume maksimum tabung adalah:
                    </p>
                    <p> \[V = 2π(4/3)(2√(8/3)) = (16π√(8/3)) / 3 \]</p>
                </div>
            
                <div class="answer">
                    <p>Kesimpulan</p>
                    <p>
                        Tabung dengan volume terbesar yang dapat dibentuk memiliki:
                    </p>
                    <ul>
                        <li>Jari-jari alas: <span> \[r = √(4/3) \]</span></li>
                        <li>Tinggi: <span> \[h = 2√(8/3) \]</span></li>
                        <li>Volume: <span> \[V = (16π√(8/3)) / 3 \]</span></li>
                    </ul>
                </div>
            </li>
            <li>
                <p>Jika \[F(t) = \int_1^t \dfrac{x+sin \pi x}{1+x^2}dx\] , dapatkan \(F(1) , F'(1), F''(1)\)</p>
                <ol type="a">
                    <li>
                        <div class="answer">
                        <p>\(F(1)\):</p>
                        <p>Karena \(F(t) = \int_1^t \dfrac{x + \sin \pi x}{1 + x^2} dx\), maka ketika \(t = 1\):
                        \[
                        F(1) = \int_1^1 \dfrac{x + \sin \pi x}{1 + x^2} dx = 0
                        \]
                        Karena integral dari batas yang sama menghasilkan 0, maka \(F(1) = 0\).
                        </div>
                    </li>

                    <li>
                        <div class="answer">
                                <p>\(F'(t)\):</p>
                                <p>Dengan menggunakan Teorema Fundamental Kalkulus, turunan pertama dari \(F(t)\) adalah integrand yang dievaluasi pada \(x = t\):
                                \[
                                F'(t) = \dfrac{t + \sin \pi t}{1 + t^2}
                                \]
                                Ketika \(t = 1\):
                                \[
                                F'(1) = \dfrac{1 + \sin \pi}{1 + 1^2} = \dfrac{1 + 0}{2} = \dfrac{1}{2}
                                \]
                        </div>
                    </li>

                    <li>
                        <div class="answer">
                                <p>\(F''(t)\):</p>
                                <p>Turunan kedua diperoleh dengan menurunkan \(F'(t)\):
                                \[F'(t) = \dfrac{t + \sin \pi t}{1 + t^2}\]
                                Terapkan aturan turunan untuk pecahan:
                                \[
                                F''(t) = \dfrac{(1 + \pi \cos \pi t)(1 + t^2) - (t + \sin \pi t)(2t)}{(1 + t^2)^2}
                                \]
                                Ketika \(t = 1\):
                                \[
                                F''(1) = \dfrac{(1 + \pi \cos \pi)(1 + 1^2) - (1 + \sin \pi)(2 \cdot 1)}{(1 + 1^2)^2}
                                \]
                                Karena \(\cos \pi = -1\) dan \(\sin \pi = 0\), maka:
                                \[
                                F''(1) = \dfrac{(1 - \pi)(2) - (1)(2)}{4} = \dfrac{2 - 2\pi - 2}{4} = \dfrac{-2\pi}{4} = -\dfrac{\pi}{2}
                                \]
                        </div>
                    </li>
                </ol>
            </li>
        </ol>
    </div>
</body>
</html>
