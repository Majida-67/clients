  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
          * {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              font-family: Poppins, sans-serif;
          }

          body {

              font-family: 'Poppins', sans-serif;
              background-color: #f2f2f2;
              color: #000000;
              transition: background-color 0.3s ease, color 0.3s ease;
          }


          /* services section  */

          .container {
              margin: 20px auto;
              padding: 20px;
              text-align: center;
              display: flex;
              justify-content: center;
              align-items: center;
              font-family: 'Poppins', sans-serif;
              background-color: #b1abab1f;
              color: #333;
              max-width: 1200px;
              display: grid;
              grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
              gap: 20px;
          }

          h1 {

              margin: 50px auto;
              justify-content: center;
              text-align: center;
              font-size: 1.9rem;
              font-weight: bolder;
              color: #000;
              margin-bottom: 70px;
          }

          .card {
              height: 590px;
              width: 310px;
              background: #fff;
              border-radius: 10px;
              overflow: hidden;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.8);
              transition: transform 0.3s ease, box-shadow 0.3s ease;
          }

          .card:hover {
              transform: translateY(-10px);
              box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
          }

          .card img {
              width: 100%;
              height: 230px;
              object-fit: cover;
          }

          .card .content {
              padding: 25px;
          }

          .card .content h3 {
              text-align: center;
              font-size: 1.3rem;
              color: #000;
              margin-bottom: 10px;
          }

          .card .content p {
              padding: 1rem 0;
              font-size: 1rem;
              color: #555;
              margin-bottom: 15px;
          }

          .card .content a {
              display: inline-block;
              text-decoration: none;
              color: #fff;
              background: #010c3e;
              padding: 1rem 2rem;
              border-radius: 5px;
              font-size: 1rem;
              transition: background 0.3s ease;
              border: 0.2px solid #010c3e;
          }

          .card .content a:hover {
              background: #fff;
              color: #010c3e;
              font-size: 1rem;
              border: 0.2px solid #5796cb;
          }

          .load-more {
              margin-top: 20px;
              margin: 15px 390px;
          }

          .load-more button {
              justify-content: center;
              text-align: center;

              border: 0.2px solid #010c3e;
              background: #010c3e;
              padding: 1rem 2rem;
              color: #fff;
              border: none;
              border-radius: 5px;
              font-size: 1rem;
              cursor: pointer;
              transition: background 0.3s ease;
          }

          .load-more button:hover {
              background: #fff;
              color: #010c3e;
              font-size: 1rem;
              border: 0.2px solid #5796cb;
          }
      </style>
  </head>

  <body>
      <!-- services section  -->
      <h1> Services</h1>
      <div class="container" id="serviceContainer">
          <!-- Initial 4 Service Cards -->
          <div class="card">
              <img src="https://media.ed.edmunds-media.com/non-make/howto/howto_1129112_1600.jpg" alt="Exterior Wash and Wax">
              <div class="content">
                  <h3>Exterior Wash and Wax</h3>
                  <p>This service focuses on cleaning the car's exterior, removing dirt, dust, and grime. After washing, a layer of wax is applied to enhance shine and protect the paint from environmental elements.</p>
                  <a href=" Exterior Wash and Wax.php">Read More</a>
              </div>
          </div>
          <div class="card">
              <img src="https://surfnshine.com/wp-content/uploads/2023/10/interior-detailing-1024x576.jpg" alt="Interior Cleaning">
              <div class="content">
                  <h3>Interior Cleaning</h3>
                  <p>Interior cleaning ensures the inside of the car is spotless. It includes vacuuming carpets and seats, wiping and polishing the dashboard, and deep-cleaning the upholstery for a fresh look and feel.</p>
                  <a href="interiorcleaning.php">Read More</a>
              </div>
          </div>
          <div class="card">
              <img src="https://autoniche.ca/wp-content/uploads/2021/06/AutoNiche-Engine-Cleaning-2048x1367.jpg" alt="Engine Cleaning">
              <div class="content">
                  <h3>Engine Cleaning</h3>
                  <p>Engine cleaning involves removing oil stains, grease, and dirt from the engine compartment. It helps improve engine efficiency and gives it a clean, well-maintained appearance.</p>
                  <a href="enginecleaning.php">Read More</a>
              </div>
          </div>
          <div class="card">
              <img src="https://i.ytimg.com/vi/3bh2Ds4GDME/maxresdefault.jpg" alt="Ceramic Coating">
              <div class="content">
                  <h3>Ceramic Coating</h3>
                  <p>Ceramic coating adds a protective layer to the car's paint, shielding it from scratches, UV rays, and fading. It enhances the car's gloss and provides long-term protection.</p>
                  <a href="creamiccoating.php">Read More</a>
              </div>
          </div>

          <!-- Additional 2 Cards (Initially Hidden) -->
          <div class="card extra" style="display: none;">
              <img src="https://cdn.australia247.info/assets/uploads/024453248395782c70919d5b71120900_-queensland-gympie-regional-rainbow-beach-4wd-underbody-complete-car-washhtml.jpg" alt="Underbody Wash">
              <div class="content">
                  <h3>Underbody Wash</h3>
                  <p>This service cleans the underside of the car, removing dirt, salt, and road grime. It helps prevent rust and corrosion, especially in areas with harsh weather conditions.</p>
                  <a href="underboady.php">Read More</a>
              </div>
          </div>
          <div class="card extra" style="display: none;">
              <img src="https://www.soft99.co.jp/en/howto/sensya-navi/images/lesson6/img_02.jpg" alt="Tire and Wheel Cleaning">
              <div class="content">
                  <h3>Tire and Wheel Cleaning</h3>
                  <p>Tire and wheel cleaning removes built-up brake dust and grime, restoring the shine of your wheels and ensuring they remain in excellent condition.</p>
                  <a href="tyres.php">Read More</a>
              </div>
          </div>
      </div>

      <div class="load-more">
          <button id="readMoreBtn" onclick="loadMore()">Read More</button>
          <button id="readLessBtn" onclick="loadLess()" style="display: none;">Read Less</button>
      </div>

      <script>
          // services section
          function loadMore() {
              // Show the hidden cards
              const extraCards = document.querySelectorAll('.extra');
              extraCards.forEach(card => {
                  card.style.display = 'block';
              });

              // Toggle button visibility
              document.getElementById('readMoreBtn').style.display = 'none';
              document.getElementById('readLessBtn').style.display = 'inline-block';
          }

          function loadLess() {
              // Hide the extra cards
              const extraCards = document.querySelectorAll('.extra');
              extraCards.forEach(card => {
                  card.style.display = 'none';
              });

              // Toggle button visibility
              document.getElementById('readMoreBtn').style.display = 'inline-block';
              document.getElementById('readLessBtn').style.display = 'none';
          }
      </script>
  </body>

  </html>