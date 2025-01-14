<section class="contact py-5" id="contact">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-5 m-auto text-center">
        <h1>Contact Us</h1>
        <h6 style="color: brown;">Always Be In Touch With Us</h6>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-lg-9 m-auto">
        <div class="row">
          <div class="col-lg-4">
            <h6>LOCATION</h6>
            <p>Jl. Bahureksa No.1, Bandung</p>

            <h6>PHONE</h6>
            <p>62551428932772</p>

            <h6>EMAIL</h6>
            <p>coffeeshopr2f@gmail.com</p>
          </div>
          <div class="col-lg-7">
            <!-- Form mulai di sini -->
            <form id="contactForm">
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" id="firstName" name="first_name" class="form-control bg-light" placeholder="First Name" required>
                </div>
                <div class="col-lg-6">
                  <input type="text" id="lastName" name="last_name" class="form-control bg-light" placeholder="Last Name" required>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 py-3">
                  <textarea id="message" name="message" class="form-control bg-light" placeholder="Enter Your Message" cols="10" rows="5" required></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- Form selesai di sini -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JS CONTACT-->
<!-- Tambahkan Script JavaScript di sini -->
<script>
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah form untuk dikirimkan ke server

    // Mengambil data dari form
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const message = document.getElementById('message').value;

    // Menampilkan data ke konsol (bisa disesuaikan dengan aksi lain)
    console.log('First Name:', firstName);
    console.log('Last Name:', lastName);
    console.log('Message:', message);

    // Menampilkan pesan sukses (bisa disesuaikan dengan aksi lain)
    alert('Your message has been received!');

    // Anda bisa melakukan tindakan lebih lanjut seperti mengirim data ke server di sini
  });
</script>

