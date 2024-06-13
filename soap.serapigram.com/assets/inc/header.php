<?php
$path = $_SERVER['SCRIPT_NAME'];
if (preg_match('|index.php|', $path)): ?>
<header class="header">
  <div class="user-info">
    <div class="user-details">
      <h3 class="user-name">
        <a href="/">
          <img src="<?=$com_href?>/img/soap_header.png" alt="">
        </a>
      </h3>
    </div>
  </div>
</header>
<?php else: ?>
<header class="header">
  <div class="user-info">
    <div class="user-avatar">
      <input class="menunavi-btn" id="menunavi-btn" type="checkbox">
      <label class="menunavi-icon" for="menunavi-btn">
        <span class="navicon"></span>
      </label>
      <div class="menunavi">
      <div class="header_menu">
        <a href="/" class="top-button">TOP</a>
        <?php include $inc_path .'/inc/area_menu.php';?>

        <ul class="menu_side">
          <li>
            <a href="https://soap.serapigram.com/link.php">
              <span>リンクについて</span>
            </a>
          </li>
          <li>
            <a href="">
              <span>お問い合わせ</span>
            </a>
          </li>
          <li>
            <a href="">
              <span>掲載のお申し込み</span>
            </a>
          </li>
          <li>
            <a href="https://soap.serapigram.com/terms.php">
              <span>利用規約</span>
            </a>
          </li>
          <li>
            <a href="https://soap.serapigram.com/policy.php">
              <span>プライバシーポリシー</span>
            </a>
          </li>
        </ul>

      </div>
    </div>
    </div>
    <div class="user-details">
      <h3 class="user-name">
        <a href="/">
          <img src="<?=$com_href?>/img/soap_header.png" alt="">
        </a>
      </h3>
    </div>
  </div>
</header>
<?php endif; ?>
