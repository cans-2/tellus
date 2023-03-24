document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      // デフォルトの動作を無効化
      e.preventDefault();
      // スクロール先の要素を取得
      const target = document.querySelector(this.getAttribute('href'));
      const headerOffset = 0; // ヘッダーの高さ
      const targetOffset = target.getBoundingClientRect().top + window.pageYOffset - headerOffset;
      const speed = 500; // ミリ秒
      // スムーススクロール
      window.scrollTo({
        top: targetOffset,
        behavior: 'smooth'
      });
    });
  });

  // ハンバーガーメニュー
  const menuIcon = document.querySelector('.menu-icon');
  const menu = document.querySelector('.menu');
  const mask = document.getElementById('mask');
  
  menuIcon.addEventListener('click', () => {
    menuIcon.classList.toggle('active');
    menu.classList.toggle('active');
    mask.classList.toggle('active')
  });

  mask.addEventListener('click',()=>{
    menuIcon.classList.toggle('active');
    menu.classList.toggle('active');
    mask.classList.toggle('active')
  })
  