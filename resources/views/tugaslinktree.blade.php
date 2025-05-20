<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ortuseight Linktree Clone</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #edeff0;
      font-family: 'Segoe UI', sans-serif;
    }
    .container {
      max-width: 600px;
      margin: auto;
      padding: 30px 15px 80px;
    }
    .logo {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
    }
    .title {
      font-weight: bold;
      font-size: 20px;
    }
    .subtitle {
      color: #555;
      margin-bottom: 25px;
    }
    .link-button {
    background-color: #fff;
    border-radius: 15px;
    padding: 19.2px; 
    margin-bottom: 15px;
    text-decoration: none;
    color: #000;
    font-size: 17px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    position: relative;
    transition: transform 0.2s ease, background-color 0.3s;
    text-align: center;
    }

    .link-button:hover {
      text-decoration: none;
      transform: scale(1.03)
    }
    
    .link-icon {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        position: absolute;
        left: 10px;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 30px;
    }

    .social-icons a {
      width: 35px;
      height: 35px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      text-decoration: none;
      color: black;
      transition: 0.3s;
    }

    .social-icons a:hover { 
        color: white;               
        transform: scale(1.1);      
    }

    .social-icons svg {
      width: 30px;
      height: 30px;
      stroke: black;
    }

    .footer {
      margin-top: 20px;
    }

    .join-btn {
      display: inline-block;
      background-color: white;
      padding: 12px 20px;
      margin-top: 30px;
      border-radius: 20px;
      font-weight: bold;
      text-decoration: none;
      color : black;
      box-shadow: 0px 2px 5px rgba(0,0,0,0.4);
    }

  </style>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container text-center">
  <img src="https://ugc.production.linktr.ee/19nh1eQ5SP34oe2KulKL_JC62obAqU5s8U430?io=true&size=avatar-v3_0g" class="logo" alt="Ortuseight Logo">

  <div class="title">FIND US <img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Twitter_Verified_Badge.svg" width="16" alt="verified"></div>
  <div class="subtitle">Welcome #TeamOrtuseight</div>

  <a href="https://ortuseight.com/" target="_blank" class="link-button">Official Website</a>
  <a href="https://linktr.ee/ortuseightapps" target="_blank" class="link-button">Download Ortuseight Apps</a>
  <a href="https://ortuseight.com/id/contact" target="_blank" class="link-button">
    <span>Ortuseight Customer Support</span>
    <img src="https://ugc.production.linktr.ee/19nh1eQ5SP34oe2KulKL_JC62obAqU5s8U430?io=true&size=avatar-v3_0" class="link-icon" alt="Icon">
  </a>
  <a href="https://shopee.co.id/ortuseightofficialshop" target="_blank" class="link-button">Shopee Mall Ortuseight</a>
  <a href="https://www.tokopedia.com/ortuseightofficial?source=universe&st=product" target="_blank" class="link-button">Tokopedia Official Store</a>
  <a href="https://pages.lazada.co.id/wow/i/id/store/shop-enter-fail-page-pc?path=index.htm&hideShopNavigate=false&sellerKey=ortus-eight-official&hideHeadFoot=false&lang=en" target="_blank" class="link-button">Lazada Official Store</a>
  <a href="https://ortuseight.com/id/find-store" target="_blank" class="link-button">Ortuseight Official Distribution Channel</a>

  <div class="social-icons">
    <a href="https://www.facebook.com/ortuseight" target="_blank">
      <svg fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
      </svg>
    </a>

    <a href="https://www.youtube.com/channel/UCdligcaImLLjXXLspo1vyuw" target="_blank">
      <svg fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
        <path d="M22.54 6.42a2.78 2.78 0 00-1.95-2C18.88 4 12 4 12 4s-6.88 0-8.59.42a2.78 2.78 0 00-1.95 2A29.94 29.94 0 001 12a29.94 29.94 0 00.46 5.58 2.78 2.78 0 001.95 2C5.12 20 12 20 12 20s6.88 0 8.59-.42a2.78 2.78 0 001.95-2A29.94 29.94 0 0023 12a29.94 29.94 0 00-.46-5.58z"/>
        <polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/>
      </svg>
    </a>

    <a href="https://www.linkedin.com/company/pt-vita-nova-atletik" target="_blank">
      <svg fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
        <path d="M16 8a6 6 0 016 6v6h-4v-6a2 2 0 00-4 0v6h-4v-6a6 6 0 016-6z"/>
        <rect x="2" y="9" width="4" height="12"/>
        <circle cx="4" cy="4" r="2"/>
      </svg>
    </a>

    <a href="mailto:cs@ortuseight.id" target="_blank">
      <svg fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
        <path d="M4 4h16c1.1 0 2 .9 2 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2z"/>
        <polyline points="22,6 12,13 2,6"/>
      </svg>
    </a>
  </div>

  <div class="footer">
    <a href="#" class="join-btn"> Join ortuseight on Linktree</a>
  </div>

</div>

</body>
</html>
