<?php
// ===============================
// KONEKSI DATABASE
// ===============================
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "web_programming_1"
);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menggunakan UTF-8
$conn->set_charset("utf8mb4");

// ===============================
// MENGAMBIL DATA MAHASISWA
// ===============================
$sql = "SELECT id, nim, nama, program_studi, email
        FROM mahasiswa
        ORDER BY id ASC";

$result = $conn->query($sql);

// Cek query
if (!$result) {
    die("Query gagal: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biodata Muhammad Fauzi</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ================= HEADER ================= -->
    <header>
        <div class="header-content">

            <div>
                <p>WEB PROGRAMMING 1</p>

                <h1>Biodata Saya</h1>
            </div>

            <div class="header-name">
                Muhammad Fauzi
            </div>

        </div>
    </header>


    <!-- ================= NAVIGASI ================= -->
    <nav>
        <a href="#about">Tentang Saya</a>
        <a href="#biodata">Biodata</a>
        <a href="#skills">Kemampuan</a>
        <a href="#goal">Tujuan</a>
        <a href="#mahasiswa">Mahasiswa</a>
    </nav>


    <!-- ================= MAIN ================= -->
    <main>

        <!-- ================= ABOUT ================= -->
        <section id="about" class="about">

            <div class="photo-box">
                <img src="foto.jpeg" alt="Foto Muhammad Fauzi">
            </div>

            <div class="about-text">

                <p class="number">01 — ABOUT</p>

                <h2>
                    Halo, saya<br>
                    <span>Muhammad Fauzi</span>
                </h2>

                <p>
                    Saya adalah mahasiswa Informatika yang sedang
                    belajar tentang pemrograman dan pembuatan website.
                    Selain coding, saya juga tertarik dengan desain.
                </p>

                <div class="tag">
                    <span>Informatika</span>
                    <span>Coding</span>
                    <span>Design</span>
                </div>

            </div>

        </section>


        <!-- ================= BIODATA ================= -->
        <section id="biodata" class="content-section">

            <div class="section-head">

                <p class="number">02 — BIODATA</p>

                <h2>Data Diri</h2>

            </div>


            <div class="data">

                <div class="data-item">
                    <small>Nama</small>
                    <p>Muhammad Fauzi</p>
                </div>

                <div class="data-item">
                    <small>NIM</small>
                    <p>24001</p>
                </div>

                <div class="data-item">
                    <small>Program Studi</small>
                    <p>Informatika</p>
                </div>

                <div class="data-item">
                    <small>Semester</small>
                    <p>2</p>
                </div>

                <div class="data-item">
                    <small>Alamat</small>
                    <p>Jakarta</p>
                </div>

                <div class="data-item">
                    <small>Hobi</small>
                    <p>Coding & Desain</p>
                </div>

            </div>

        </section>


        <!-- ================= SKILLS ================= -->
        <section id="skills" class="content-section">

            <div class="section-head">

                <p class="number">03 — SKILLS</p>

                <h2>Yang Sedang Saya Pelajari</h2>

            </div>


            <div class="skill-list">

                <div class="skill">

                    <b>01</b>

                    <div>
                        <h3>HTML</h3>

                        <p>
                            Membuat struktur halaman website.
                        </p>
                    </div>

                </div>


                <div class="skill">

                    <b>02</b>

                    <div>
                        <h3>CSS</h3>

                        <p>
                            Mengatur tampilan dan layout website.
                        </p>
                    </div>

                </div>


                <div class="skill">

                    <b>03</b>

                    <div>
                        <h3>Desain</h3>

                        <p>
                            Membuat tampilan yang sederhana
                            dan nyaman dilihat.
                        </p>
                    </div>

                </div>

            </div>

        </section>


        <!-- ================= GOAL ================= -->
        <section id="goal" class="goal">

            <div>

                <p class="number">
                    04 — LEARNING GOAL
                </p>

                <h2>
                    Terus belajar,<br>
                    terus berkembang.
                </h2>

            </div>


            <p>
                Saya ingin memahami HTML, CSS, dan JavaScript
                agar dapat membuat website sendiri dan
                mengembangkan kemampuan saya di bidang teknologi.
            </p>

        </section>


        <!-- ================= DATA MAHASISWA ================= -->
        <section id="mahasiswa" class="content-section">

            <div class="section-head">

                <p class="number">
                    05 — DATABASE
                </p>

                <h2>
                    Daftar Mahasiswa
                </h2>

            </div>


            <table class="data-table">

                <caption>
                    Data Mahasiswa dari Database MySQL
                </caption>

                <thead>

                    <tr>

                        <th scope="col">
                            No
                        </th>

                        <th scope="col">
                            NIM
                        </th>

                        <th scope="col">
                            Nama
                        </th>

                        <th scope="col">
                            Program Studi
                        </th>

                        <th scope="col">
                            Email
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php
                    $no = 1;

                    while ($row = $result->fetch_assoc()) {
                    ?>

                        <tr>

                            <td>
                                <?= $no++; ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($row['nim']); ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($row['nama']); ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($row['program_studi']); ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($row['email']); ?>
                            </td>

                        </tr>

                    <?php
                    }
                    ?>

                </tbody>

            </table>

        </section>

    </main>
    <?php
$no = 1;
while ($row = $result->fetch_assoc()) {
?>
 <tr>
 <td><?php echo $no; ?></td>
 <td><?php echo htmlspecialchars($row["nim"]); ?></td>
 <td><?php echo htmlspecialchars($row["nama"]); ?></td>
 <td><?php echo htmlspecialchars($row["program_studi"]); ?></td>
 <td><?php echo htmlspecialchars($row["email"]); ?></td>
</tr>
<?php
 $no++;
}
?>
    <!-- ================= FOOTER ================= -->
    <footer>

        <p>
            © 2026 Muhammad Fauzi
        </p>

        <p>
            Web Programming 1 — Informatika
        </p>

    </footer>


</body>

</html>

<?php
// Menutup koneksi database
$conn->close();
?>