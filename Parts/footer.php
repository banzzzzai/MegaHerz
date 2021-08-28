<style>
* {
  margin: 0;
  padding: 0;
}
html,
body {
  height: 100%;
}
.wrapper {
  display: flex;
  flex-direction: column;
  height: 100%;
}
.content {
  flex: 1 0 auto;
}
.footer {
  flex: 0 0 auto;
}</style>
<div class="footer row clearfix">
    <div class="col half">
        <a href="/index.php">
            <img height="200" id="footerlogo" src="/img/logo_megaherz.jpg" width="200">
        </a>
    </div>

    <div class="col half m-auto">
        <h class="mt-3 text-center">Наша группа ВКонтакте:</h>
        <!-- VK Widget -->
        <div id="vk_groups"></div>
        <script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 1, no_cover: 1}, 195795914);
        </script>
    </div>

    <div class="col half mt-5">
        <p>Санкт-Петербург, РГПУ имени А. И. Герцена<br>
            +7 (931) 200 68 01 - Цветкова Анна Игоревна<br></p>
        <p>Электронная почта: <a href="mailto:anna.igorevna.0@yandex.ru">anna.igorevna.0@yandex.ru</a></p>
        <ul>
            <a href="https://vk.com/beauty_anka" target="_blank" title="VK">
                <img src="https://tutoronline.ru/media/477314/vk.png" alt="VK" height="29" width="29"></a>
            <a href="https://www.youtube.com/channel/UCBM3_LpeBdyhTiCrcJjGsAQ" target="_blank" title="Youtube">
                <img src="https://tutoronline.ru/media/477329/yt.png" alt="Youtube" height="29" width="29"></a>
        </ul>
    </div>
</div>