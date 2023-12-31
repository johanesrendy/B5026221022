<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Johanes Rendy</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('/css/ets.css')}}" />
  </head>
  <body>
    <div class="max-width-60 text-light">
      <nav class="navbar navbar-expand-lg fixed-top bg-black">
        <div class="container-fluid mt-2 max-width-60">
          <a class="navbar-brand text-primary" href="#">RENDY</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mt-2 mb-lg-0 gap-4">
              <li class="nav-item">
                <a
                  class="nav-link active text-light"
                  aria-current="page"
                  href="#"
                  >Home</a
                >
                <div class="border-bot"></div>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active text-light"
                  aria-current="page"
                  href="#about"
                  >About</a
                >
                <div class="border-bot"></div>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active text-light"
                  aria-current="page"
                  href="#skills"
                  >Skills</a
                >
                <div class="border-bot"></div>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active text-light"
                  aria-current="page"
                  href="#projects"
                  >Projects</a
                >
                <div class="border-bot"></div>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active text-light"
                  aria-current="page"
                  href="#contact"
                  >Contact</a
                >
                <div class="border-bot"></div>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active text-light"
                  aria-current="page"
                  href="#assignment"
                  >Assigment</a
                >
                <div class="border-bot"></div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="px-4">
        <section id="home" class="row pt-5">
          <div class="container-home">
            <div class="d-block d-sm-none">
              <div
                class="d-flex justify-content-center align-items-center pt-5 mt-5"
              >
                <img
                  class="profil-image img-fluid w-50"
                  src="{{asset('assets/images/ets/profile.png')}}"
                  alt="profile picture"
                />
              </div>
              <div class="mt-5 text-center">
                <div>
                  <h6 class="text-primary">HELLO!</h6>
                  <h1 class="mt-1 introduction text-light fw-bold">
                    I'm
                    <span class="text-primary">Johanes Rendy Wichaksono</span>
                  </h1>
                  <h6 class="mt-2 text-light">Front End Web Developer</h6>
                  <div class="row mt-3 gap-2 d-flex justify-content-center">
                    <div class="col-4 w-auto px-0">
                      <a href="#contact" class="btn btn-primary">Hire Me</a>
                    </div>
                    <div class="col-5 w-auto px-0">
                      <a href="#projects" class="btn btn-outline-primary">
                        My Works
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-none d-sm-block">
              <div class="row d-flex align-items-center">
                <div class="col d-flex align-items-center justify-content-end">
                  <div>
                    <h6 class="text-primary">HELLO!</h6>
                    <h1 class="mt-4 introduction text-light font-h1">
                      I'm
                      <span class="text-primary">Johanes Rendy Wichaksono</span>
                    </h1>
                    <h3 class="mt-3 text-light">Front End Web Developer</h3>
                    <div class="row mt-5 gap-4">
                      <div class="col-4 w-auto px-0">
                        <a href="#contact" class="btn btn-primary btn-lg"
                          >Hire Me</a
                        >
                      </div>
                      <div class="col-5 w-auto px-0">
                        <a
                          href="#projects"
                          class="btn btn-outline-primary btn-lg"
                        >
                          My Works
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col d-flex overflow-hidden">
                  <div>
                    <img
                      class="profil-image img-fluid"
                      src="{{asset('assets/images/ets/profile.png')}}"
                      alt="profile picture"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div id="about" class="spacer"></div>
        <section class="row">
          <div class="container-fluid">
            <div class="d-block d-sm-none">
              <div class="position-relative">
                <div class="row text-center">
                  <h1 class="font-h1">About me</h1>
                  <h1 class="font-shadow position-absolute">About</h1>
                  <p class="mt-4 text-secondary">
                    A responsible, dedication, honest individual, and have a
                    strong inclination for learning new things.
                  </p>
                </div>
                <div class="row">
                  <div class="col">
                    <ul class="ul-project">
                      <li class="about-list">Name:</li>
                      <li class="about-list">Date of Birth:</li>
                      <li class="about-list">City:</li>
                      <li class="about-list">Education:<br /><br /></li>
                      <li class="about-list">Email:</li>
                      <li class="about-list">Phone:</li>
                    </ul>
                  </div>
                  <div class="col">
                    <ul class="text-secondary ul-project">
                      <li class="about-list-content">
                        Johanes Rendy Wichaksono
                      </li>
                      <li class="about-list-content">April 04, 2004</li>
                      <li class="about-list-content">Surabaya</li>
                      <li class="about-list-content">
                        Sepuluh Nopember Institute of Technology
                      </li>
                      <li class="about-list-content">
                        johanesrendy9@gmail.com
                      </li>
                      <li class="about-list-content">+62-896-0389-6025</li>
                    </ul>
                  </div>
                  <a
                    href="https://drive.google.com/drive/folders/1tGX8vvot55nKx_kJzA2d3Zx4lVcZ8Bbp"
                    target="_blank"
                  >
                    <button class="btn btn-primary w-auto">DOWNLOAD CV</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="d-none d-sm-block">
              <div class="row">
                <div class="col-5 d-flex">
                  <div class="w-100">
                    <img
                      class="w-100"
                      src="{{asset('assets/images/ets/profile-2.png')}}"
                      alt="profile picture"
                    />
                  </div>
                </div>
                <div class="col-1"></div>
                <div class="col position-relative">
                  <h1 class="font-h1">About me</h1>
                  <h1 class="font-shadow position-absolute">About</h1>
                  <p class="mt-4 text-secondary">
                    A responsible, dedication, honest individual, and have a
                    strong inclination for learning new things.
                  </p>
                  <div class="row">
                    <div class="col-4">
                      <ul class="ul-project">
                        <li class="about-list">Name:</li>
                        <li class="about-list">Date of Birth:</li>
                        <li class="about-list">City:</li>
                        <li class="about-list">Education:<br /><br /></li>
                        <li class="about-list">Email:</li>
                        <li class="about-list">Phone:</li>
                      </ul>
                    </div>
                    <div class="col">
                      <ul class="text-secondary ul-project">
                        <li class="about-list-content">
                          Johanes Rendy Wichaksono
                        </li>
                        <li class="about-list-content">April 04, 2004</li>
                        <li class="about-list-content">Surabaya</li>
                        <li class="about-list-content">
                          Sepuluh Nopember Institute of Technology
                        </li>
                        <li class="about-list-content">
                          johanesrendy9@gmail.com
                        </li>
                        <li class="about-list-content">+62-896-0389-6025</li>
                      </ul>
                    </div>
                    <a
                      href="https://drive.google.com/drive/folders/1tGX8vvot55nKx_kJzA2d3Zx4lVcZ8Bbp"
                      target="_blank"
                    >
                      <button class="btn btn-primary w-auto">
                        DOWNLOAD CV
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div id="skills" class="spacer"></div>
        <section class="row">
          <div class="container-fluid">
            <div>
              <div>
                <div class="container-fluid content-center">
                  <div class="w-auto">
                    <div class="position-relative w-auto mb-5">
                      <h1 class="font-h1">My Skills</h1>
                      <h1 class="font-shadow-center position-absolute">
                        Skills
                      </h1>
                      <div class="content-center">
                        <p class="mt-4 text-secondary w-75">
                          Here are the programming languages, frameworks, dan
                          libraries that I am good at.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div
                  id="carouselExampleControls"
                  class="carousel slide"
                  data-bs-ride="carousel"
                >
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="img-wrapper">
                        <img
                          src="{{asset('assets/images/ets/html.png')}}"
                          class="d-block img-carousel"
                          alt="..."
                        />
                      </div>
                      <p class="text-white mt-2 text-center">HTML</p>
                    </div>
                    <div class="carousel-item">
                      <div class="img-wrapper">
                        <img
                          src="{{asset('assets/images/ets/css.png')}}"
                          class="d-block img-carousel"
                          alt="..."
                        />
                      </div>
                      <p class="text-white mt-2 text-center">CSS</p>
                    </div>
                    <div class="carousel-item">
                      <div class="img-wrapper">
                        <img
                          src="{{asset('assets/images/ets/java.png')}}"
                          class="d-block img-carousel"
                          alt="..."
                        />
                      </div>
                      <p class="text-white mt-2 text-center">JAVA</p>
                    </div>
                    <div class="carousel-item">
                      <div class="img-wrapper">
                        <img
                          src="{{asset('assets/images/ets/js.png')}}"
                          class="d-block img-carousel"
                          alt="..."
                        />
                      </div>
                      <p class="text-white mt-2 text-center">JAVASCRIPT</p>
                    </div>
                    <div class="carousel-item">
                      <div class="img-wrapper">
                        <img
                          src="{{asset('assets/images/ets/tailwind.png')}}"
                          class="d-block img-carousel"
                          alt="..."
                        />
                      </div>
                      <p class="text-white mt-2 text-center">TAILWIND CSS</p>
                    </div>
                    <div class="carousel-item">
                      <div class="img-wrapper">
                        <img
                          src="{{asset('assets/images/ets/react.png')}}"
                          class="d-block img-carousel"
                          alt="..."
                        />
                      </div>
                      <p class="text-white mt-2 text-center">REACT JS</p>
                    </div>
                    <div class="carousel-item">
                      <div class="img-wrapper">
                        <img
                          src="{{asset('assets/images/ets/bootstrap.png')}}"
                          class="d-block img-carousel"
                          alt="..."
                        />
                      </div>
                      <p class="text-white mt-2 text-center">BOOTSTRAP CSS</p>
                    </div>
                  </div>
                  <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev"
                  >
                    <span
                      class="carousel-control-prev-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleControls"
                    data-bs-slide="next"
                  >
                    <span
                      class="carousel-control-next-icon"
                      aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div id="projects" class="spacer"></div>
        <section class="row">
          <div class="container-fluid content-center">
            <div class="w-auto">
              <div class="position-relative w-auto mb-5">
                <h1 class="font-h1">My Projects</h1>
                <h1 class="font-shadow-center position-absolute">Projects</h1>
                <div class="content-center">
                  <p class="mt-4 text-secondary w-75">
                    Here are some projects that I have developed using several
                    programming languages, frameworks, and libraries.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5 justify-content-center text-center">
            <div class="row">
              <a
                target="_blank"
                href="https://arek.its.ac.id/kmk/home3c/"
                class="col img-projects"
              >
                <div
                  class="bg-image"
                  style="
                    background-image: url({{asset('assets/images/ets/ss-3c.png')}});
                    background-size: cover;
                  "
                >
                  <div class="mask">
                    <div
                      class="d-flex justify-content-center align-items-center h-100"
                    >
                      <h1 class="text-white fs-4">3C KMK ITS 2023</h1>
                    </div>
                  </div>
                </div>
              </a>
              <a
                target="_blank"
                href="https://ise-its.com/"
                class="col img-projects"
              >
                <div
                  class="bg-image"
                  style="
                    background-image: url({{asset('assets/images/ets/ss-ise.png')}});
                    background-size: cover;
                  "
                >
                  <div class="mask">
                    <div
                      class="d-flex justify-content-center align-items-center h-100"
                    >
                      <h1 class="text-white fs-4">ISE 2023</h1>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="row mt-4">
              <a
                target="_blank"
                href="https://docs.google.com/presentation/d/11cY2xft2Q2oiuKb9qkdJQWO0woKAfJxLBICTjLzrgis/edit#slide=id.g2477f2f2dfe_0_1237"
                class="col img-projects"
              >
                <div
                  class="bg-image"
                  style="
                    background-image: url({{asset('assets/images/ets/v-rent.png')}});
                    background-size: cover;
                  "
                >
                  <div class="mask">
                    <div
                      class="d-flex justify-content-center align-items-center h-100"
                    >
                      <h1 class="text-white fs-4">V-rent</h1>
                    </div>
                  </div>
                </div>
              </a>
              <div class="col"></div>
            </div>
          </div>
        </section>
        <div id="contact" class="spacer"></div>
        <section class="row">
          <div>
            <div class="container-fluid content-center">
              <div class="w-auto">
                <div class="position-relative w-auto mb-5">
                  <h1 class="font-h1">Contact Me</h1>
                  <h1 class="font-shadow-center position-absolute">Contact</h1>
                  <div class="content-center">
                    <p class="mt-4 text-secondary w-75">
                      Here are some contacts that i used
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-block d-sm-none">
            <div class="row">
              <div class="col-6">
                <div class="row justify-content-center">
                  <div class="contact-bg">
                    <ion-icon
                      name="home"
                      size="large"
                      class="icon-color"
                    ></ion-icon>
                  </div>
                  <div class="mt-4 text-center">
                    <h6>ADDRESS</h6>
                    <p class="text-secondary mt-3">Surabaya, indonesia</p>
                  </div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
              </div>
              <div class="col-6">
                <div class="row justify-content-center">
                  <div class="contact-bg">
                    <ion-icon
                      name="call"
                      size="large"
                      class="icon-color"
                    ></ion-icon>
                  </div>
                  <div class="mt-4 text-center">
                    <h6>CONTACT NUMBER</h6>
                    <p class="text-secondary mt-3">+62 896 0389 6025</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="row justify-content-center">
                  <div class="contact-bg">
                    <ion-icon
                      name="mail"
                      size="large"
                      class="icon-color"
                    ></ion-icon>
                  </div>
                  <div class="mt-4 text-center">
                    <h6>EMAIL ADDRESS</h6>
                    <p class="text-secondary mt-3">johanesrendy9@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="row justify-content-center">
                  <div class="contact-bg">
                    <ion-icon
                      name="earth"
                      size="large"
                      class="icon-color"
                    ></ion-icon>
                  </div>
                  <div class="mt-4 text-center">
                    <h6>WEBSITE</h6>
                    <p class="text-secondary mt-3">johanesrendy.github.io</p>
                  </div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
              </div>
            </div>
          </div>
          <div class="d-none d-sm-block">
            <div class="row">
              <div class="col-3">
                <div class="row justify-content-center">
                  <div class="contact-bg">
                    <ion-icon
                      name="home"
                      size="large"
                      class="icon-color"
                    ></ion-icon>
                  </div>
                  <div class="mt-4 text-center">
                    <h6>ADDRESS</h6>
                    <p class="fs-6 text-secondary mt-3">Surabaya, Indonesia</p>
                  </div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
              </div>
              <div class="col-3">
                <div class="row justify-content-center">
                  <div class="contact-bg">
                    <ion-icon
                      name="call"
                      size="large"
                      class="icon-color"
                    ></ion-icon>
                  </div>
                  <div class="mt-4 text-center">
                    <h6>CONTACT NUMBER</h6>
                    <p class="fs-6 text-secondary mt-3">+62 896 0389 6025</p>
                  </div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
              </div>
              <div class="col-3">
                <div class="row justify-content-center">
                  <div class="contact-bg">
                    <ion-icon
                      name="mail"
                      size="large"
                      class="icon-color"
                    ></ion-icon>
                  </div>
                  <div class="mt-4 text-center">
                    <h6>EMAIL ADDRESS</h6>
                    <p class="text-secondary mt-3">johanesrendy9@gmail.com</p>
                  </div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
              </div>
              <div class="col-3">
                <div class="row justify-content-center">
                  <div class="contact-bg">
                    <ion-icon
                      name="earth"
                      size="large"
                      class="icon-color"
                    ></ion-icon>
                  </div>
                  <div class="mt-4 text-center">
                    <h6>WEBSITE</h6>
                    <p class="text-secondary mt-3">johanesrendy.github.io</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-5 mb-5">
            <div
              class="d-none d-sm-block col-md-6 d-flex h-100 align-items-center"
            >
              <h1 class="display-3 fw-bolder text-center text-primary">
                CONTACT FORM
              </h1>
            </div>
            <div class="col-md-6">
              <form id="contactForm">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nama"
                    name="nama"
                  />
                  <div class="error-message" id="nama-error"></div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input class="form-control" id="email" name="email" />
                  <div class="error-message" id="email-error"></div>
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea
                    class="form-control"
                    id="pesan"
                    name="pesan"
                    rows="4"
                  ></textarea>
                  <div class="error-message" id="pesan-error"></div>
                </div>
                <button type="submit" class="btn btn-primary" id="submitBtn">
                  Kirim Pesan
                </button>
              </form>
              <div class="mt-3" id="loading" style="display: none">
                <div class="spinner-border text-primary" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </div>
              <div class="mt-3" id="alert" style="display: none"></div>
            </div>
          </div>
        </section>
        <div id="assignment" class="spacer"></div>
        <section>
            <div class="container-fluid content-center">
              <div class="w-auto">
                <div class="position-relative w-auto mb-5">
                  <h1 class="font-h1">Assignment</h1>
                  <h1 class="font-shadow-center position-absolute">Assignment</h1>
                  <div class="content-center">
                    <p class="mt-4 text-secondary w-75">
                      Here are all of projects that i have done in programming class B
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap">
              <div class="col-4 p-1">
                <div class="btn btn-primary rounded-md w-100">
                  <a target="_blank" href="/chat">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Tugas Chat</h4>
                      </div>
                    </div>
  
                  </a>
                </div>

              </div>
              <div class="col-4 p-1">
                <div class="btn btn-primary rounded-md w-100">
                  <a target="_blank" href="/keyboard">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Tugas Keyboard</h4>
                      </div>
                    </div>
  
                  </a>
                </div>

              </div>
              <div class="col-4 p-1">
                <div class="btn btn-primary rounded-md w-100">
                  <a target="_blank" href="/keranjangbelanja">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Tugas Keranjang Belanja</h4>
                      </div>
                    </div>
  
                  </a>
                </div>

              </div>
              <div class="col-4 p-1">
                <div class="btn btn-primary rounded-md w-100">
                  <a target="_blank" href="/nilai">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Tugas Nilai Kuliah</h4>
                      </div>
                    </div>
  
                  </a>
                </div>

              </div>
              <div class="col-4 p-1">
                <div class="btn btn-primary rounded-md w-100">
                  <a target="_blank" href="/pegawai">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Tugas Pegawai</h4>
                      </div>
                    </div>
  
                  </a>
                </div>

              </div>
              <div class="col-4 p-1">
                <div class="btn btn-primary rounded-md w-100">
                  <a target="_blank" href="/tugas1">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Tugas 1</h4>
                      </div>
                    </div>
  
                  </a>
                </div>

              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                <a target="_blank" href="/tugas2">
                  <div class=" ratio ratio-21x9 w-100">
                    <div class="d-flex align-items-center justify-content-center text-white">

                      <h4>Tugas 2</h4>
                    </div>
                  </div>

                </a>
              </div></div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank"  href="https://drive.google.com/file/d/1sm_ZsMuBlerP76-6Sd2WghjBbU78-pFR/view?usp=drive_link">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Tugas 3</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank" href="/html1">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 1</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank" href="/html2">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 2</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank"  href="/html3">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 3</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank" href="/html4">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 4</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank" href="/bootstrap">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 5</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank"  href="/javascript1">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 6</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank" href="/javascript2">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 7</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank" href="/form-validate">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 8</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank" href="/perkalian">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 9</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank" href="/biodata">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 10</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank" href="/showjam/220">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 11</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
              <div class="col-4 p-1">
                <div class="w-100 btn btn-primary rounded-md">
                  <a target="_blank" href="/formulir">
                    <div class=" ratio ratio-21x9 w-100">
                      <div class="d-flex align-items-center justify-content-center text-white">
  
                        <h4>Materi 12</h4>
                      </div>
                    </div>
  
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="text-center text-lg-start">
        <div class="container d-flex justify-content-center py-5">
          <a
            target="_blank"
            href="www.linkedin.com/in/johanesrendy"
            class="btn btn-primary d-flex align-items-center btn-lg btn-floating mx-2 py-3"
          >
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
          <a
            target="_blank"
            href="https://wa.me/6289603896025"
            class="btn btn-primary d-flex align-items-center btn-lg btn-floating mx-2 py-3"
          >
            <ion-icon name="logo-whatsapp"></ion-icon>
          </a>
          <a
            target="_blank"
            href="https://www.instagram.com/jrenacc/"
            class="btn btn-primary d-flex align-items-center btn-lg btn-floating mx-2 py-3"
          >
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </div>

        <!-- Copyright -->
        <div
          class="text-center text-white p-3"
          style="background-color: rgba(0, 0, 0, 0.2)"
        >
          © 2023
          <a class="text-white" href="https://mdbootstrap.com/"
            >Johanes Rendy</a
          >
        </div>
        <!-- Copyright -->
      </footer>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/ets.js')}}"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
