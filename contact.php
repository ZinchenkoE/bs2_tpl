<?/** @var $data array */?><? require 'db.php' ?><? require 'head.php' ?><? require 'header.php' ?>

<div class="container">
    <div class="main">
        <div class="contact">
            <div class="contact_info">
                <h2>get in touch</h2>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424396.3176723366!2d150.92243255000002!3d-33.7969235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1430912648478"
                            width="100%" height="250" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
            <div class="contact-form">
                <h2>Напишите нам</h2>
                <form method="post" action="contact-post.php">
                    <div>
                        <span><label>Имя</label></span>
                        <span><input name="userName" type="text" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>E-mail</label></span>
                        <span><input name="userEmail" type="text" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>Телефон</label></span>
                        <span><input name="userPhone" type="text" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>Сообщение</label></span>
                        <span><textarea name="userMsg"> </textarea></span>
                    </div>
                    <div>
                        <span><input type="submit" class="" value="Submit us"></span>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<? require 'foot.php' ?>