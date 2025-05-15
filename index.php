<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Booking Hotel Dinamis</title>
<style>
  /* Reset and basic style */
  * {
    box-sizing: border-box;  
  }
  body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
                 Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    margin: 0; padding: 0;
	background: linear-gradient(135deg, #729979 100%);
    background-color: #729979;
    min-height: 100vh;
    display: flex; justify-content: center; align-items: center;
    padding: 20px;
  }
  .container {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    width: 100%;
    max-width: 500px;
    padding: 30px 35px 40px;
  }
  h1, h2 {
    color: #719442;
    font-weight: 700;
    text-align: center;
    margin-top: 0;
  }
  h1 {
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
  }
  h2 {
    font-size: 1.3rem;
    margin-bottom: 1.2rem;
  }
  p {
    font-size: 1rem;
    line-height: 1.5;
    margin-top: 0;
    margin-bottom: 1rem;
    text-align: justify;
  }
  ul {
    padding-left: 18px;
    margin-top: 0;
    margin-bottom: 1.5rem;
  }
  label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #719442;
  }
  input[type="text"],
  input[type="email"],
  input[type="number"],
  input[type="date"],
  select {
    width: 100%;
    padding: 10px 14px;
    font-size: 1rem;
    border: 2px solid #719442;
    border-radius: 8px;
    transition: border-color 0.3s ease;
  }
  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="number"]:focus,
  input[type="date"]:focus,
  select:focus {
    border-color: #719442;
    outline: none;
  }
  button {
    background: #324d34;
    border: none;
    color: white;
    font-weight: 700;
    font-size: 1.1rem;
    padding: 12px 0;
    border-radius: 10px;
    width: 100%;
    cursor: pointer;
    margin-top: 1.6rem;
  }
  button:disabled {
    background-color: #324d34;
    cursor: not-allowed;
  }
  button:hover:not(:disabled),
  button:focus:not(:disabled) {
    background-color: #729979;
    outline: none;
  }
  .error {
    background: #ffe3e3;
    color: #d8000c;
    padding: 10px 15px;
    border-radius: 8px;
    margin-bottom: 1rem;
    font-weight: 700;
    text-align: center;
  }
  .step {
    display: none;
  }
  .step.active {
    display: block;
  }
  .summary p {
    font-size: 1rem;
    margin: 0.8rem 0;
    line-height: 1.4;
  }
  .summary strong {
    color: #719442;
  }
  /* Responsive */
  @media (max-width: 480px) {
    .container {
      padding: 25px 20px 30px;
    }
    h1 {
      font-size: 1.6rem;
    }
    h2 {
      font-size: 1.15rem;
    }
    button {
      font-size: 1rem;
      padding: 10px 0;
    }
  }
</style>
</head>
<body>
<div class="container" role="main" aria-label="Form Booking Hotel Bertahap">
	<div style="text-align:center; margin-bottom: 20px;">
		<img src="/hotel/image/logo.png" alt="Logo Hotel 1001" style="max-width: 80px; height: auto;">
	</div>
  <!-- Step 1: Hotel Description -->
  <section id="step-1" class="step active" aria-live="polite" aria-atomic="true">
    <h1>Selamat Datang di Hotel 1001</h1>
    <h2>Deskripsi Hotel</h2>
    <p>Kami menyediakan berbagai tipe kamar hotel dengan fasilitas terbaik untuk kenyamanan Anda.</p>
    <ul>
      <li><strong>Tipe Kamar Standard:</strong> Kamar nyaman dengan fasilitas dasar, cocok untuk perjalanan singkat dan bisnis.</li>
      <li><strong>Tipe Kamar Superior:</strong> Ruang lebih luas dengan fasilitas tambahan untuk pengalaman menginap yang lebih baik.</li>
      <li><strong>Tipe Kamar Deluxe:</strong> Kamar mewah dengan dekorasi elegan dan fasilitas lengkap, cocok untuk liburan keluarga.</li>
      <li><strong>Tipe Kamar Suite:</strong> Kamar eksklusif dengan ruang tamu terpisah dan fasilitas premium untuk kenyamanan maksimal.</li>
    </ul>
    <button id="to-step-2" aria-label="Lanjut ke form nama dan email">Mulai Booking</button>
  </section>

  <!-- Step 2: Name and Email -->
  <section id="step-2" class="step" aria-live="polite" aria-atomic="true">
    <h1>Isi Identitas Anda</h1>
    <div role="alert" id="error-step-2" class="error" style="display:none;"></div>
    <form id="form-step-2" novalidate>
      <label for="name">Nama Lengkap</label>
      <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" autocomplete="name" required aria-required="true" />

      <label for="email">Alamat Email</label>
      <input type="email" id="email" name="email" placeholder="contoh@domain.com" autocomplete="email" required aria-required="true" />

      <button type="submit" aria-label="Lanjut ke pilihan kamar dan pembayaran">Lanjut</button>
    </form>
  </section>

  <!-- Step 3: Room Type, Check-in Date, Nights, Payment -->
  <section id="step-3" class="step" aria-live="polite" aria-atomic="true">
    <h1>Pilih Kamar dan Pembayaran</h1>
    <div role="alert" id="error-step-3" class="error" style="display:none;"></div>
    <form id="form-step-3" novalidate>
      <label for="room_type">Tipe Kamar</label>
      <select id="room_type" name="room_type" required aria-required="true">
        <option value="" disabled selected>-- Pilih Tipe Kamar --</option>
        <option value="Standard">Tipe Kamar Standard (Rp 350.000/malam)</option>
        <option value="Superior">Tipe Kamar Superior (Rp 500.000/malam)</option>
        <option value="Deluxe">Tipe Kamar Deluxe (Rp 700.000/malam)</option>
        <option value="Suite">Tipe Kamar Suite (Rp 1.000.000/malam)</option>
      </select>

      <label for="checkin_date">Tanggal Check-in</label>
      <input type="date" id="checkin_date" name="checkin_date" required aria-required="true" min="" />

      <label for="nights">Lama Menginap (malam)</label>
      <input type="number" id="nights" name="nights" min="1" value="1" required aria-required="true" />

      <label for="payment_method">Metode Pembayaran</label>
      <select id="payment_method" name="payment_method" required aria-required="true">
        <option value="" disabled selected>-- Pilih Metode Pembayaran --</option>
        <option value="bank_transfer">Bank Transfer</option>
        <option value="credit_card">Kartu Kredit</option>
        <option value="e_wallet">E-Wallet</option>
      </select>

      <button type="submit" aria-label="Lanjut ke konfirmasi booking">Bayar</button>
    </form>
  </section>

  <!-- Step 4: Summary and Confirmation -->
  <section id="step-4" class="step" aria-live="polite" aria-atomic="true">
    <h1>Rincian Booking Anda</h1>
    <div class="summary" id="summary"></div>
    <button id="restart" aria-label="Memulai booking baru">Booking Lagi</button>
  </section>
</div>

<script>
  (() => {
    const steps = ["step-1", "step-2", "step-3", "step-4"];
    let currentStep = 0;

    // Prices data
    const prices = {
      "Standard": 350000,
      "Superior": 500000,
      "Deluxe": 700000,
      "Suite": 1000000
    };

    // Cached form data
    let formData = {
      name: "",
      email: "",
      room_type: "",
      checkin_date: "",
      nights: 1,
      payment_method: ""
    };

    // Elements
    const toStep2Btn = document.getElementById('to-step-2');
    const errorStep2 = document.getElementById('error-step-2');
    const errorStep3 = document.getElementById('error-step-3');
    const summaryEl = document.getElementById('summary');
    const restartBtn = document.getElementById('restart');

    const step2Form = document.getElementById('form-step-2');
    const step3Form = document.getElementById('form-step-3');

    // Show step function
    function showStep(stepIndex) {
      steps.forEach((id, i) => {
        document.getElementById(id).classList.toggle('active', i === stepIndex);
      });
      currentStep = stepIndex;
      if (stepIndex === 2) {
        // Set min date for checkin_date input
        const checkinInput = document.getElementById('checkin_date');
        const today = new Date().toISOString().split('T')[0];
        checkinInput.min = today;
      }
    }

    // Name validation: non-empty and only letters/spaces
    function validateName(name) {
      return name.trim().length >= 2;
    }

    // Email validation (simple regex)
    function validateEmail(email) {
      const re = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
      return re.test(email);
    }

    // Step 2 submit handler
    step2Form.addEventListener('submit', e => {
      e.preventDefault();
      errorStep2.style.display = "none";
      const name = step2Form.name.value.trim();
      const email = step2Form.email.value.trim();

      if (!validateName(name)) {
        errorStep2.textContent = "Nama lengkap minimal 2 karakter.";
        errorStep2.style.display = "block";
        return;
      }
      if (!validateEmail(email)) {
        errorStep2.textContent = "Format email tidak valid.";
        errorStep2.style.display = "block";
        return;
      }

      formData.name = name;
      formData.email = email;
      showStep(2);
    });

    // Step 3 submit handler
    step3Form.addEventListener('submit', e => {
      e.preventDefault();
      errorStep3.style.display = "none";

      const room_type = step3Form.room_type.value;
      const checkin_date = step3Form.checkin_date.value;
      const nights = parseInt(step3Form.nights.value, 10);
      const payment_method = step3Form.payment_method.value;

      if (!room_type) {
        errorStep3.textContent = "Pilih tipe kamar.";
        errorStep3.style.display = "block";
        return;
      }
      if (!checkin_date) {
        errorStep3.textContent = "Tanggal check-in wajib diisi.";
        errorStep3.style.display = "block";
        return;
      }
      // Check date is today or later
      const today = new Date();
      const checkinDateObj = new Date(checkin_date);
      if (checkinDateObj < new Date(today.toDateString())) {
        errorStep3.textContent = "Tanggal check-in harus hari ini atau hari setelahnya.";
        errorStep3.style.display = "block";
        return;
      }
      if (!nights || nights < 1) {
        errorStep3.textContent = "Lama menginap minimal 1 malam.";
        errorStep3.style.display = "block";
        return;
      }
      if (!payment_method) {
        errorStep3.textContent = "Pilih metode pembayaran.";
        errorStep3.style.display = "block";
        return;
      }

      // Save
      formData.room_type = room_type;
      formData.checkin_date = checkin_date;
      formData.nights = nights;
      formData.payment_method = payment_method;

      showStep(3);
      displaySummary();
    });

    // Display booking summary in step 4
    function displaySummary() {
      const pricePerNight = prices[formData.room_type] || 0;
      const totalPrice = pricePerNight * formData.nights;

      summaryEl.innerHTML = `
        <p>Terima kasih, <strong>${escapeHTML(formData.name)}</strong>!</p>
        <p>Email Anda: <strong>${escapeHTML(formData.email)}</strong></p>
        <p>Anda memilih tipe kamar: <strong>${escapeHTML(formData.room_type)}</strong> selama <strong>${formData.nights}</strong> malam.</p>
        <p>Tanggal Check-in: <strong>${formData.checkin_date}</strong></p>
        <p>Harga per malam: <strong>Rp ${pricePerNight.toLocaleString('id-ID')}</strong></p>
        <p><strong>Total Biaya: Rp ${totalPrice.toLocaleString('id-ID')}</strong></p>
        <p>Metode Pembayaran: <strong>${paymentMethodLabel(formData.payment_method)}</strong></p>
        <div class="payment-info" style="margin-top:1em; padding:10px; background:#eef6ff; border-left: 5px solid #0071e3; border-radius:6px;">
          ${paymentInfoHTML(formData.payment_method)}
        </div>
      `;
    }

    // Payment method label helper
    function paymentMethodLabel(method) {
      const labels = {
        bank_transfer: "Bank Transfer",
        credit_card: "Kartu Kredit",
        e_wallet: "E-Wallet",
        cash: "Tunai (Cash)"
      };
      return labels[method] || "Metode Tidak Dikenal";
    }

    // Payment method info text HTML
    function paymentInfoHTML(method) {
      switch(method) {
        case "bank_transfer":
          return `<p>Silakan lakukan transfer ke rekening berikut:<br/><strong>Bank ABC 123-456-789</strong></p>`;
        case "credit_card":
          return `<p>Pembayaran dengan kartu kredit diproses secara aman.</p>`;
        case "e_wallet":
          return `<p>Pembayaran melalui e-wallet Anda akan diproses.</p>`;
        case "cash":
          return `<p>Silakan siapkan pembayaran tunai saat kedatangan.</p>`;
        default:
          return `<p>Metode pembayaran tidak diketahui.</p>`;
      }
    }

    // Escape HTML to prevent injection
    function escapeHTML(str) {
      return str.replace(/[&<>"']/g, tag => ({
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#39;'
      }[tag]));
    }

    // Restart booking: clear data and go back to step 1
    restartBtn.addEventListener('click', () => {
      formData = {
        name: "",
        email: "",
        room_type: "",
        checkin_date: "",
        nights: 1,
        payment_method: ""
      };
      step2Form.reset();
      step3Form.reset();
      errorStep2.style.display = "none";
      errorStep3.style.display = "none";
      showStep(0);
    });

    // Move from step 1 to step 2
    toStep2Btn.addEventListener('click', () => {
      showStep(1);
    });

    // Initialize min date for step 3 checkin date at load
    document.addEventListener('DOMContentLoaded', () => {
      showStep(0);
    });
  })();
</script>
</body>
</html>

