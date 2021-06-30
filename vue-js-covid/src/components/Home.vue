<template>
  <div>
    <nav>
      <div class="logo">
        <div class="arrow-down"></div>
      </div>
      <ul>
        <li>Services</li>
        <li>Products</li>
        <li>FAQs</li>
        <li>Contact</li>
      </ul>
    </nav>
    <section class="banner">
      <div class="container">
        <div class="banner-text">
          <h1>Covid portal</h1>
          <p>
            <strong
              >We make it easy to get the most out of your virtual
              machine.</strong
            >
            Our tools make it simple to track how your Droplets are performing
            and help you to respond quickly if there is a problem
          </p>
          <router-link to="/login"><button>Login</button></router-link>
        </div>
      </div>
      <img
        class="banner-image"
        src="https://preview.ibb.co/bMi5Y6/banner_img.png"
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
            <h3 class="card-title">Monitoring</h3>
            <p class="card-text">
              Collect metrics on visibility, monitor Droplet performance and
              receive alerts when problems arise in your infrastructure–at no
              additional cost.
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
            <h3 class="card-title">Cloud Firewalls</h3>
            <p class="card-text">
              Perfect for both staging and production deployments, cloud
              firewalls let you easily secure your infrastructure and define
              what services are visible on your Droplets–at no additional cost.
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
            <h3 class="card-title">Team Management</h3>
            <p class="card-text">
              With Digital Teams you can invite and manage users, ensure
              security with two-factor authentication, and control your resource
              spend with centralized billing–at no additional cost.
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
            <ul>
              <li>Footer Link</li>
              <li>Footer Link</li>
              <li>Footer Link</li>
              <li>Footer Link</li>
              <li>Footer Link</li>
              <li>Footer Link</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul>
              <li>Footer Link</li>
              <li>Footer Link</li>
              <li>Footer Link</li>
              <li>Footer Link</li>
              <li>Footer Link</li>
              <li>Footer Link</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul>
              <li>Footer Link</li>
              <li>Footer Link</li>
              <li>Footer Link</li>
              <li>Footer Link</li>
              <li>Footer Link</li>
            </ul>
          </div>
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
  height: 50px;
  background: #ffffff;
  box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15);
  display: flex;
  align-items: center;
  justify-content: flex-start;
  padding: 0;
  z-index: -2;
  position: relative;
}
nav ul {
  margin: 0;
  list-style: none;
  padding: 0;
  display: flex;
  align-items: center;
  cursor: pointer;
}
nav ul li {
  margin-right: 30px;
  color: #4b71ff;
}
nav ul li:last-child {
  margin-right: 0px;
}
nav .logo {
  height: 50px;
  width: 75px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  top: 0;
  left: 0;
  margin-right: 30px;
  background-color: #4b71ff;
  cursor: pointer;
}
nav .arrow-down {
  width: 0;
  height: 0;
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-top: 15px solid #fff;
}

.banner {
  height: auto;
  margin: 32px 0px;
  display: flex;
  align-items: center;
  width: 100%;
  position: relative;
  z-index: 1;
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
  right: 0px;
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
  height: 100%;
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
