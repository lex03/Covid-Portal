<template>
  <div>
    <nav class="d-flex justify-content-center">
      <div class="logo">
        <!-- <div class="arrow-down"></div> -->
        <img
          src="../assets/covid-19-on-world-map-260nw-1922924069-removebg-preview.png"
          alt="logo"
        />
      </div>
    </nav>
    <section class="banner">
      <div class="container">
        <div class="banner-text">
          <h1>Covid portal</h1>
          <p>
            <strong>
              Government of India is taking all necessary steps to ensure </strong
            >that we are prepared well to face the challenge and threat posed by
            the growing pandemic of COVID-19 the Corona Virus. The most
            important factor in preventing the spread of the Virus locally is to
            empower the citizens with the right information and taking
            precautions as per the advisories being issued by Ministry of Health
            & Family Welfare
          </p>
          <router-link to="/login"><button>Login</button></router-link>
        </div>
      </div>
      <img
        class="banner-image"
        src="https://medicinespatentpool.org/uploads/2020/05/covid19_logo.png"
        alt="monitoring"
      />
    </section>

    <div class="container">
      <div class="row">
        <div class="mb-30 col-md-6 col-lg-4">
          <div class="card">
            <img
              class="card-icon"
              src="https://image.ibb.co/cFV8mR/monitoring.png"
              alt="monitoring"
            />
            <h3 class="card-title">Tracking</h3>
            <p class="card-text">
              Helps to Track and maintain a record of COVID 19 Positive patients
              with an Admin side and a Client side. Tracking is Effecient
              because it helps the users to track the status of every patients
              by the help of our COVID-19 Portal.
            </p>
            <a class="card-link" href="#">Learn more</a>
          </div>
        </div>
        <div class="mb-30 col-md-6 col-lg-4">
          <div class="card">
            <img
              class="card-icon"
              src="https://image.ibb.co/jfmg6R/cloud_firewalls.png"
              alt="monitoring"
            />
            <h3 class="card-title">Interactive UI</h3>
            <p class="card-text">
              “Design is not just what it looks like and feels like Design is
              how it works.” This famous quote from Steve Job stresses the
              importance of having good interaction design – the user’s overall
              experience and satisfaction with a product.
            </p>
            <a class="card-link" href="#">Learn more</a>
          </div>
        </div>
        <div class="mb-30 col-md-6 col-lg-4">
          <div class="card">
            <img
              class="card-icon"
              src="https://image.ibb.co/fcnzt6/team_management.png"
              alt="team management"
            />
            <h3 class="card-title">Safe & Secured Data</h3>
            <p class="card-text">
              Keeping your passwords, financial, and other personal information
              safe and protected from outside intruders has long been a priority
              of businesses, but it's increasingly critical for consumers and
              individuals to heed data protection advice and use sound practices
              to keep your sensitive personal information safe and secure.
            </p>
            <a class="card-link" href="#">Learn more</a>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul class="justify-content-center" style="text-align:center;">
              <li>Best Tracking Services</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="justify-content-center" style="text-align:center;">
              <li>Interactive UI</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="justify-content-center" style="text-align:center;">
              <li>Secured Data</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <center>
            <p style="color:white;">Authored By Lex and Srinivass</p>
          </center>
        </div>
      </div>
    </footer>
  </div>
</template>

<style>
body {
  background: #dfe9ff;
  font-family: Lato, sans-serif;
}

nav {
  height: 100px;
  background: transparent;
  /* box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15); */
  display: flex;
  align-items: center;
  justify-content: flex-start;
  padding: 0;
  z-index: -2;
  position: relative;
}
nav .logo {
  height: 150px;
  width: 185px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  /* top: 0;
  left: 0; */
  margin-top: 20px;
  /* background-color: #4b71ff; */
  cursor: pointer;
}
.banner {
  height: auto;
  margin: 32px 0px;
  display: flex;
  align-items: center;
  width: 100%;
  position: relative;
  z-index: 1;
  margin-right: 400px;
}
@media (min-width: 768px) {
  .banner {
    height: 450px;
    margin-bottom: 32px;
  }
}
.banner .banner-image {
  position: absolute;
  opacity: 0.25;
  right: 100px;
  top: 0px;
  height: 300px;
  z-index: -1;
  filter: drop-shadow(0 3rem 0.05rem #bfd8ff);
}
@media (min-width: 768px) {
  .banner .banner-image {
    display: inherit;
    height: 400px;
    top: 0px;
    opacity: 0.5;
  }
}
@media (min-width: 992px) {
  .banner .banner-image {
    height: 500px;
    top: -50px;
    opacity: 1;
  }
}
.banner .banner-text {
  max-width: 550px;
  float: left;
}
.banner .banner-text h1 {
  color: #00106a;
  font-size: 3rem;
  font-weight: 700;
  letter-spacing: 3px;
  margin-bottom: 1rem;
}
.banner .banner-text p {
  color: #00106a;
  font-size: 1.05rem;
  line-height: 1.75;
}
.banner button {
  border: 0;
  border-radius: 50px;
  padding: 0.75rem 2.75rem;
  background: #4b71ff;
  color: #ffffff;
  box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.25);
  cursor: pointer;
  position: relative;
  font-size: 1rem;
  font-weight: 400;
  letter-spacing: 1px;
  transition: all 0.3s ease-in-out;
}
.banner button:hover {
  transform: translateY(-5px);
  box-shadow: 0 1rem 1.5rem rgba(0, 0, 0, 0.25);
}

.mb-30 {
  margin-bottom: 30px;
}

.card {
  padding: 16px 24px;
  background: #ffffff;
  height: 80%;
  position: relative;
  border: none;
  box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15);
  border: 2px solid transparent;
  transition: all 0.3s ease-in-out;
  z-index: 10;
}
.card h3.card-title {
  font-weight: 700;
  font-size: 1.3rem;
  color: #00106a;
}
.card p {
  color: #989dc5;
  font-size: 1rem;
  line-height: 1.5;
  margin-bottom: 72px;
}
.card .card-link {
  position: absolute;
  bottom: 18px;
}
.card:hover {
  transform: translateY(-15px);
  box-shadow: 0 1rem 1.5rem rgba(0, 0, 0, 0.15);
  cursor: pointer;
}
.card .card-icon {
  width: 60px;
  margin-bottom: 8px;
  position: relative;
  top: 0;
  left: -12px;
}

footer {
  background: #00106a;
  margin: 32px 0 0px;
  padding: 32px 0;
}
footer ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
footer ul li {
  color: #ffffff;
  margin-bottom: 16px;
}
</style>
