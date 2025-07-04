<?php
// ...existing code...
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portofolio</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Open+Sans:wght@400;500;700&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#">
                <h1 class="logo">My Portofolio</h1>
            </a>

            <button class="nav-toggle-btn" aria-label="Toggle Menu" data-nav-toggle-btn>
                <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
                <ion-icon name="close-outline" class="close-icon"></ion-icon>
            </button>

            <nav class="navbar container">
                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    <li>
                        <a href="#about" class="navbar-link" data-nav-link>About</a>
                    </li>

                    <li>
                        <a href="#portfolio" class="navbar-link" data-nav-link>Project</a>
                    </li>

                    <li>
                        <a href="#skills" class="navbar-link" data-nav-link>Skills</a>
                    </li>

                    <li>
                        <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
                    </li>

                    <li>
                        <a href="#blog" class="navbar-link" data-nav-link>My Team</a>
                    </li>

                    <li>
                        <a href="/login" class="btn btn-primary" style="opacity: 0; pointer-events: auto;">Login</a>
                    </li>


                </ul>
            </nav>

        </div>
    </header>





    <main>
        <article>

            <!--
        - #HERO
      -->

            <section class="hero" id="home">
                <div class="container">

                    <div class="hero-banner">

                        <img src="./assets/images/me.jpg" width="800" height="864" loading="lazy"
                            alt="Ilmi's Photo" class="img-cover">

                        <div class="elem elem-1">
                            <p class="elem-title">12</p>

                            <p class="elem-text">Years of Success</p>
                        </div>

                        <div class="elem elem-2">
                            <p class="elem-title">800+</p>

                            <p class="elem-text">Projects Completed</p>
                        </div>

                        <div class="elem elem-3">
                            <ion-icon name="trophy"></ion-icon>
                        </div>

                        <!-- <img src="./assets/images/foto.jpg" width="169" height="172"
                            alt="I'm developer from New York" class="rotate-img"> -->

                    </div>

                    <div class="hero-content">

                        <h2 class="hero-title">
                            <span>Halo, Saya</span>
                            <strong>Zulhilmi Luthfiah</strong> Web Developer 
                        </h2>

                        <p class="hero-text">
                            Saya berfokus membangun website modern, responsif, dan mudah digunakan.
                        </p>

                        <div class="btn-group">
                            <a href="#contact" class="btn btn-primary blue">Hubungi Saya</a>

                            <a href="#about" class="btn">Tentang Saya</a>
                        </div>

                    </div>

                </div>
            </section>





            <!--
        - #ABOUT
      -->

            <section class="section about" id="about">
                <div class="container">
                    {{-- Pastikan $biodata dikirim dari controller --}}
                    {{-- Jika tabel Anda bernama "biodata", pastikan modelnya juga mengarah ke tabel "biodata" --}}
                    <figure class="about-banner">
                        @if (!empty($biodata->foto))
                            <img src="{{ asset($biodata->foto) }}" width="800" height="652" loading="lazy"
                                alt="Foto Profil" class="img-cover">
                        @else
                            <img src="./assets/images/about-banner.jpg" width="800" height="652" loading="lazy"
                                alt="Ethan's Photo" class="img-cover">
                        @endif

                        {{-- <img src="./assets/images/absolute-image.jpg" width="800" height="717" loading="lazy"
                            alt="Ethan's Photo" class="abs-img"> --}}

                        <div class="abs-icon abs-icon-1">
                            <ion-icon name="logo-css3"></ion-icon>
                        </div>

                        <div class="abs-icon abs-icon-2">
                            <ion-icon name="logo-javascript"></ion-icon>
                        </div>

                        <div class="abs-icon abs-icon-3">
                            <ion-icon name="logo-angular"></ion-icon>
                        </div>

                    </figure>

                    <div class="about-content">

                        <p class="section-subtitle">Web Developer</p>

                        <h2 class="h2 section-title">I Develop Application that Help People</h2>

                        <p class="section-text">
                             Saya adalah seorang UI/UX & Web Developer yang berfokus pada pembuatan aplikasi dan website yang fungsional, user-friendly, dan berdampak nyata bagi pengguna.
                        </p>

                        <p class="section-text">
                               Berikut adalah biodata saya sebagai pengembang web yang siap menciptakan solusi digital terbaik.
                        </p>

                        <div class="personal-info">
                            <div class="row g-4">
                                <div class="col-6">
                                    <div class="info-item">
                                        <span class="label">Nama</span>
                                        <span class="value">{{ $biodata->nama ?? '-' }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="info-item">
                                        <span class="label">No Telepon</span>
                                        <span class="value">{{ $biodata->no_telepon ?? '-' }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="info-item">
                                        <span class="label">Usia</span>
                                        <span class="value">{{ $biodata->usia ?? '-' }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="info-item">
                                        <span class="label">Email</span>
                                        <span class="value">{{ $biodata->email ?? '-' }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="info-item">
                                        <span class="label">Tanggal Lahir</span>
                                        <span class="value">{{ $biodata->tanggal_lahir ?? '-' }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="info-item">
                                        <span class="label">Alamat</span>
                                        <span class="value">{{ $biodata->alamat ?? '-' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <a href="#portfolio" class="btn btn-primary blue">View Portfolio</a>-->

                    </div>

                </div>
            </section>





            <!--
        - #Project
      -->

            <section class="section portfolio" id="portfolio">
                <div class="container">

                    <p class="section-subtitle">Project</p>

                    <h2 class="h2 section-title">My Amazing Works</h2>


                    <p class="section-text">
                        Berikut adalah beberapa proyek pilihan yang telah saya kerjakan
                    </p>



                    <ul class="portfolio-list">
                        @forelse ($projects as $project)
                            <li>
                                <div class="portfolio-card"
                                    style="background-image: url('{{ asset($project->screenshot ?? 'assets/images/portfolio-1.jpg') }}'); cursor:pointer;"
                                    onclick="showProjectDetail('{{ asset($project->screenshot ?? 'assets/images/portfolio-1.jpg') }}', '{{ addslashes($project->nama_projek) }}', `{{ addslashes($project->deskripsi) }}`)">
                                    <div class="card-content">
                                        <p class="card-subtitle">{{ $project->nama_projek ?? 'Project' }}</p>
                                        <h3 class="h3 card-title">{{ $project->deskripsi ?? '-' }}</h3>
                                        <span class="btn-link"
                                            style="margin-top:10px;display:inline-flex;align-items:center;">
                                            <span>View Project</span>
                                            <ion-icon name="arrow-forward"></ion-icon>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li>
                                <p style="color: #999;">Belum ada project yang ditambahkan.</p>
                            </li>
                        @endforelse
                    </ul>

                </div>
            </section>





            <!--
        - #SKILLS
      -->

            <section class="section skills" id="skills">
                <div class="container">

                    <p class="section-subtitle">My Skills</p>

                    <h2 class="h2 section-title">I Develop Skills Regularly</h2>

                    <p class="section-text">
                       Saya rutin mengasah kemampuan di bidang pengembangan web untuk tetap relevan dengan perkembangan teknologi.
                    </p>

                    <ul class="skills-list">

                        <li class="skills-item">
                            <div class="wrapper" style="width: 95%">
                                <h3 class=" skills-title">HTML</h3>

                                <data class="skills-data" value="95">95%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 95%"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="wrapper" style="width: 75%">
                                <h3 class="skills-title">CSS</h3>

                                <data class="skills-data" value="75">75%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 75%"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="wrapper" style="width: 60%">
                                <h3 class="skills-title">Java Script</h3>

                                <data class="skills-data" value="90">60%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 60%"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="wrapper" style="width: 90%">
                                <h3 class="skills-title">Figma</h3>

                                <data class="skills-data" value="90">90%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 90%"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="wrapper" style="width: 80%">
                                <h3 class="skills-title">PHP</h3>

                                <data class="skills-data" value="80">80%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 80%"></div>
                            </div>
                        </li>

                        <li class="skills-item">
                            <div class="wrapper" style="width: 75%">
                                <h3 class="skills-title">Java</h3>

                                <data class="skills-data" value="80">80%</data>
                            </div>

                            <div class="skills-progress-box">
                                <div class="skills-progress" style="width: 80%"></div>
                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!--
        - #CONTACT
      -->

            <section class="section contact" id="contact">
                <div class="container">

                    <div class="contact-card">

                        <p class="card-subtitle">Don't be shy</p>

                        <h2 class="h2 section-title">Drop Me a Line</h2>

                        <div class="wrapper">

                            <form action="" class="contact-form">

                                <input type="text" name="name" placeholder="Name" required
                                    class="contact-input">

                                <input type="email" name="email" placeholder="Email" required
                                    class="contact-input">

                                <textarea name="message" placeholder="Message" required class="contact-input"></textarea>

                                <button type="submit" class="btn-submit">Submit Message</button>

                            </form>

                            <ul class="contact-list">

                                <li class="contact-item">

                                    <div class="contact-icon">
                                        <ion-icon name="location"></ion-icon>
                                    </div>

                                    <div>
                                        <h3 class="contact-item-title">Alamat</h3>

                                        <address class="contact-item-link">
                                            Pasuruan
                                        </address>
                                    </div>

                                </li>

                                <li class="contact-item">

                                    <div class="contact-icon">
                                        <ion-icon name="mail"></ion-icon>
                                    </div>

                                    <div>
                                        <h3 class="contact-item-title">Email</h3>

                                        <a href="mailto:hello@ethan.com" class="contact-item-link">zulhilmiluthfiah36@gmail.com</a>
                                    </div>

                                </li>

                                <li class="contact-item">

                                    <div class="contact-icon">
                                        <ion-icon name="call"></ion-icon>
                                    </div>

                                    <div>
                                        <h3 class="contact-item-title">No Telepon</h3>

                                        <a href="tel:+1234567890" class="contact-item-link">+6285855244990</a>
                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>
            </section>





            <!--
        - #BLOG
      -->

<section class="section blog" id="blog">
  <div class="container">

    <p class="section-subtitle">My Team</p>

    <h2 class="h2 section-title">Colaboration Team</h2>

    <p class="section-text">
      Saya bekerja bersama tim yang solid dan berdedikasi untuk menciptakan solusi digital yang efektif dan inovatif.
    </p>

    <!-- Integrasi data API teman -->
    <div id="team-biodata" style="margin-bottom:24px;"></div>

    <script>
      const apiBiodataTeman = 'https://andhikamaulana.my.id/api/profiles';

      fetch(apiBiodataTeman)
        .then(res => res.json())
        .then(response => {
          const teman = response.data[0];

          // Buat URL foto
          const fotoUrl = teman.photo
            ? (teman.photo.startsWith('https') ? teman.photo : 'https://andhikamaulana.my.id/storage/' + teman.photo)
            : 'https://ui-avatars.com/api/?name=' + encodeURIComponent(teman.name ?? 'Teman');

          // Tampilkan data ke dalam elemen HTML
          document.getElementById('team-biodata').innerHTML = `
            <h3>Biodata Teman</h3>
            <div style="display:flex;align-items:center;gap:20px;flex-wrap:wrap;">
              <img src="${fotoUrl}" alt="Foto Teman" style="width:100px;height:100px;object-fit:cover;border-radius:50%;border:2px solid #ccc;">
              <ul style="list-style:none;padding:0;margin:0;">
                <li><strong>Nama:</strong> ${teman.name ?? '-'}</li>
                <li><strong>Tanggal Lahir:</strong> ${teman.birthdate ?? '-'}</li>
                <li><strong>Jenis Kelamin:</strong> ${teman.gender ?? '-'}</li>
                <li><strong>Telepon:</strong> ${teman.phone ?? '-'}</li>
                <li><strong>Alamat:</strong> ${teman.address ?? '-'}</li>
              </ul>
            </div>
          `;
        })
        .catch(error => {
          console.error('Gagal mengambil biodata teman:', error);
          document.getElementById('team-biodata').innerHTML = `<p style="color:red;">Gagal memuat biodata teman.</p>`;
        });
    </script>
  </div>
</section>


        </article>
    </main>
<!-- Section Project -->
<section id="projects" class="section">
  <div class="container">
    <div class="section-header text-center mb-5">
      <h2 class="h2 section-title">Project Tim</h2>
      <p class="section-text">Berikut adalah kumpulan proyek keren yang telah dibuat oleh Andhika.</p>
    </div>

    <div class="row" id="project-list">
      <!-- Data project akan muncul di sini -->
    </div>
  </div>
</section>

<!-- Script untuk menampilkan project -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('project-list');

    fetch('https://www.andhikamaulana.my.id/api/projects')
      .then(res => res.json())
      .then(res => {
        const projects = Array.isArray(res) ? res : res.data ?? [];

        if (!projects.length) {
          container.innerHTML = '<div class="col-12 text-center">Belum ada data project.</div>';
          return;
        }

        container.innerHTML = projects.map((project, idx) => {
          const imagePath = project.image ?? `/storage/${project.screenshot ?? ''}`;
          const fullImageUrl = imagePath.startsWith('http')
            ? imagePath
            : `https://www.andhikamaulana.my.id/${imagePath.replace(/^\/+/, '')}`;

          return `
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="${100 + idx * 100}">
              <div class="card h-100 shadow-sm border-0">
                <img src="${fullImageUrl}" alt="${project.title}" class="card-img-top" style="height:220px; object-fit:cover;">
                <div class="card-body d-flex flex-column justify-content-between">
                  <h5 class="card-title text-center" style="text-decoration: underline; color: #333;">
                    ${project.title}
                  </h5>
                  <p class="card-text text-center">${project.description ?? 'Tidak ada deskripsi.'}</p>
                </div>
              </div>
            </div>
          `;
        }).join('');
      })
      .catch(() => {
        container.innerHTML = '<div class="col-12 text-danger text-center">Gagal memuat data project.</div>';
      });
  });
</script>





    <!--
    - #FOOTER
  -->

    <footer class="footer">
        <div class="container">

            <p class="copyright">
                &copy; 2025 <a href="#" class="copyright-link">OMI</a>. All Rights Reseverd
            </p>

            <ul class="footer-list">
                <li>
                    <a href="#" class="footer-link">Terms & Condition</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Privacy Policy</a>
                </li>
            </ul>

        </div>
    </footer>





    <!--
    - #BACK TO TOP
  -->

    <a href="#top" class="back-to-top" data-back-to-top>BACK TOP</a>





    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Modal Project Detail -->
    <div id="projectDetailModal"
        style="display:none;position:fixed;z-index:9999;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.6);align-items:center;justify-content:center;">
        <div
            style="background:#fff;border-radius:16px;max-width:500px;width:90vw;padding:24px;position:relative;box-shadow:0 8px 32px rgba(0,0,0,0.18);margin:auto;">
            <button onclick="closeProjectDetail()"
                style="position:absolute;top:12px;right:16px;background:none;border:none;font-size:2rem;cursor:pointer;">
                &times;
            </button>
            <img id="modalScreenshot" src="" alt="Screenshot"
                style="width:100%;border-radius:12px;margin-bottom:16px;">
            <h3 id="modalNamaProjek" style="margin-bottom:8px;"></h3>
            <div id="modalDeskripsi" style="color:#333;font-size:1rem;"></div>
        </div>
    </div>

    <script>
        function showProjectDetail(screenshot, nama, deskripsi) {
            document.getElementById('modalScreenshot').src = screenshot;
            document.getElementById('modalNamaProjek').innerText = nama;
            document.getElementById('modalDeskripsi').innerText = deskripsi;
            document.getElementById('projectDetailModal').style.display = 'flex';
        }

        function closeProjectDetail() {
            document.getElementById('projectDetailModal').style.display = 'none';
        }
    </script>

</body>

</html>
