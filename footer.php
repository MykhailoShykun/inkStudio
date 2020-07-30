<div class="contact">
   <form class="contact__form" action="" method="post">
      <div class="contact__close">
         <span class="close__span"></span>
         <span class="close__span"></span>
      </div>
      <h3>Оставьте заявку</h3>
      <h4>и мы свяжемся с вами в ближайшее время ;)</h4>
      <input class="contact__input name" placeholder="*Имя" type="text" tabindex="1" required autofocus>
      <div class="contact__inner">
         <input class="contact__input email" placeholder="*электронная почта" type="email" tabindex="2" required>
         <input class="contact__input phone" placeholder="*номер телефона" type="tel" tabindex="3" required>
      </div>
      <textarea class="contact__input comment" placeholder="*комментарий" tabindex="5" required></textarea>
      <button name="submit" type="submit" class="btn submit" data-submit="...Sending">отправить</button>
   </form>
</div>
<footer>

</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>js/svg4everybody.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/main.js"></script>
  </body>
</html>
