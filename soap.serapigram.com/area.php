<?php
include 'define.php';
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<meta name="description" content="" >
<meta name='robots' content='max-image-preview:large' />
<link rel="canonical" href="">

<meta property="og:url" content="">
<meta property="og:type" content="article">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:site_name" content="">
<meta property="og:image" content="">
<meta name="twitter:card" content="" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="" />
<?php
$loc_href = '.';
$inc_path = $_SERVER["DOCUMENT_ROOT"].'/assets';
$com_href = '/assets';

include $inc_path .'/inc/head.php';
?>
<body>
<div class="container">
  <?php include $inc_path .'/inc/side_left.php';?>
  <div class="content">
    <?php include $inc_path .'/inc/header.php';?>


<div class="prof_cal">
  <div class="prof_item_cal"><a href="shop.php" target="_blank"><img src="<?=$com_href?>/img/soap01.jpg" alt=""></a></div>
  <div class="prof_item_cal"><a href="shop.php" target="_blank"><img src="<?=$com_href?>/img/soap02.jpg" alt=""></a></div>
  <div class="prof_item_cal"><a href="shop.php" target="_blank"><img src="<?=$com_href?>/img/soap03.jpg" alt=""></a></div>
  <div class="prof_item_cal"><a href="shop.php" target="_blank"><img src="<?=$com_href?>/img/soap04.jpg" alt=""></a></div>
  <div class="prof_item_cal"><a href="shop.php" target="_blank"><img src="<?=$com_href?>/img/soap05.jpg" alt=""></a></div>
</div>

<h1 class="big_h2">雄琴のソープランド一覧</h1>


<div class="in_box">
  <!-- in_box -->
  <div class="button-container2">
    <button class="material-button push">
      <span class="button-text">ALL</span>
    </button>
    <button class="material-button">
      <span class="button-text">〜3万</span>
    </button>
    <button class="material-button">
      <span class="button-text">3万〜5万</span>
    </button>
    <button class="material-button">
      <span class="button-text">5万〜</span>
    </button>
  </div>
</div>
<!-- in_box -->


<div class="timeline_story">
  <div class="story-container">
    <div class="story-item">
      <a href="shop.php">
      <img src="<?=$com_href?>/img/exe_soap.jpg" alt="Story1">
      </a>
      <span class="story-name">EXE（エグゼ）</span>
    </div>
    <div class="story-item">
      <a href="shop.php">
      <img src="<?=$com_href?>/img/bunny_soap.jpg" alt="Story3">
      </a>
      <span class="story-name">BUNNYS CLUB</span>
    </div>
    <div class="story-item">
      <a href="shop.php">
      <img src="<?=$com_href?>/img/suibi_soap.jpg" alt="Story2">
      </a>
      <span class="story-name">BUNNYS CLUB</span>
    </div>
    <div class="story-item">
      <a href="shop.php">
      <img src="<?=$com_href?>/img/nyotei_soap.jpg" alt="Story4">
      </a>
      <span class="story-name">女帝</span>
    </div>
    <div class="story-item">
      <a href="shop.php">
      <img src="<?=$com_href?>/img/sky_soap.jpg" alt="Story5">
      </a>
      <span class="story-name">SKY(スカイ)</span>
    </div>
    <div class="story-item">
      <a href="shop.php">
      <img src="<?=$com_href?>/img/exe_soap.jpg" alt="Story1">
      </a>
      <span class="story-name">EXE（エグゼ）</span>
    </div>
    <div class="story-item">
      <a href="shop.php">
      <img src="<?=$com_href?>/img/bunny_soap.jpg" alt="Story3">
      </a>
      <span class="story-name">BUNNYS CLUB</span>
    </div>
    <div class="story-item">
      <a href="shop.php">
      <img src="<?=$com_href?>/img/suibi_soap.jpg" alt="Story2">
      </a>
      <span class="story-name">BUNNYS CLUB</span>
    </div>
    <div class="story-item">
      <a href="shop.php">
      <img src="<?=$com_href?>/img/nyotei_soap.jpg" alt="Story4">
      </a>
      <span class="story-name">女帝</span>
    </div>
    <div class="story-item">
      <a href="shop.php">
      <img src="<?=$com_href?>/img/sky_soap.jpg" alt="Story5">
      </a>
      <span class="story-name">SKY(スカイ)</span>
    </div>
    <!-- 追加のストーリーアイテムをここに追加 -->
  </div>
</div>



    <div class="tabs">
      <input id="all" type="radio" name="tab_item" checked>
      <label class="tab_item" for="all">出勤一覧</label>
      <input id="programming" type="radio" name="tab_item">
      <label class="tab_item" for="programming">ニュース</label>
      <input id="design" type="radio" name="tab_item">
      <label class="tab_item" for="design">店舗一覧</label>
      <div class="tab_content" id="all_content">

        <div class="box-004 box-004_down">
        <p>出勤はAM0:00に切り替わります</p>
        </div>

        <div class="daynavi">
          <button class="day-button current">
            <p><span class="month">4/</span>30<br>
            (火)</p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>1<br>
            (水)</p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>2<br>
            (木)</p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>3<br>
            (金)</p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>4<br>
            <span class="satd">(土)</span></p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>5<br>
            <span class="sund">(日)</span></p>
          </button>
          <button class="day-button">
            <p><span class="month">5/</span>6<br>
            (月)</p>
          </button>
          </div>


<div class="Edit__commonPanelRow">
  <div class="Edit__commonPanelConditions">
    <label class="_checkboxLabel">
      <input class="_checkbox" type="checkbox" @click="changeTimeToAll" :checked="selectTime.includes('ALL')" checked>
      <span>ALL</span>
    </label>
    <label class="_checkboxLabel">
      <input class="_checkbox" type="checkbox" @click="changeTime('s9e18')" :checked="selectTime.includes('s9e18')">
      <span>5:00〜12:00</span>
    </label>
    <label class="_checkboxLabel">
      <input class="_checkbox" type="checkbox" @click="changeTime('s18e24')" :checked="selectTime.includes('s18e24')">
      <span>12:00〜18:00</span>
    </label>
    <label class="_checkboxLabel">
      <input class="_checkbox" type="checkbox" @click="changeTime('s24e29')" :checked="selectTime.includes('s24e29')">
      <span>18:00〜23:59</span>
    </label>
  </div>
</div>


<div class="container_photo">
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/soap_01.jpg" loading="lazy">
    </a>
    <div class="table_pos_in">
      <p class="in_time">出勤中</p>
    </div>
    <p class="at_time">11:00-18:00</p>
    <p class="at_name">名前 / 年齢</p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/soap_02.jpg" oading="lazy">
    </a>
    <div class="table_pos_in">
      <p class="in_time">出勤中</p>
    </div>
    <p class="at_time">11:00-18:00</p>
    <p class="at_name">名前 / 年齢</p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/soap_03.jpg" loading="lazy">
    </a>
    <div class="table_pos_in">
      <p class="in_time">出勤中</p>
    </div>
    <p class="at_time">11:00-18:00</p>
    <p class="at_name">名前 / 年齢</p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/soap_04.jpg" loading="lazy">
    </a>
    <p class="at_time">11:00-18:00</p>
    <p class="at_name">名前 / 年齢</p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/soap_05.jpg" loading="lazy">
    </a>
    <p class="at_time">11:00-18:00</p>
    <p class="at_name">名前 / 年齢</p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/soap_01.jpg" loading="lazy">
    </a>
    <p class="at_time">11:00-18:00</p>
    <p class="at_name">名前 / 年齢</p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/soap_02.jpg" oading="lazy">
    </a>
    <p class="at_time">11:00-18:00</p>
    <p class="at_name">名前 / 年齢</p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/soap_03.jpg" loading="lazy">
    </a>
    <p class="at_time">11:00-18:00</p>
    <p class="at_name">名前 / 年齢</p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/soap_04.jpg" loading="lazy">
    </a>
    <div class="table_pos_item">
        <p class="out_time">本日終了</p>
    </div>
    <p class="at_time">20:00-23:59</p>
    <p class="at_name">名前 / 年齢</p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/soap_05.jpg" loading="lazy">
    </a>
    <div class="table_pos_item">
        <p class="out_time">本日終了</p>
    </div>
    <p class="at_time">18:00-23:59</p>
    <p class="at_name">名前 / 年齢</p>
  </div>
</div>

<div class="load_bt_box">
<button class="load_bt">更に読み込む</button>
<p class="iconloader">
<i class="fa-duotone fa-spinner fa-spin fa-3x fa-fw"></i>
</p>
</div>
</div>
<!-- tab -->
<div class="tab_content" id="programming_content">
<div class="timeline">
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_01.jpg">
      </a>
    </div>
  </div>
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_02.jpg">
      </a>
    </div>
  </div>
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_03.jpg">
      </a>
    </div>
  </div>
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_04.jpg">
      </a>
    </div>
  </div>
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_05.jpg">
      </a>
    </div>
  </div>
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_01.jpg">
      </a>
    </div>
  </div>
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_02.jpg">
      </a>
    </div>
  </div>
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_03.jpg">
      </a>
    </div>
  </div>
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_04.jpg">
      </a>
    </div>
  </div>
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_05.jpg">
      </a>
    </div>
  </div>
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_01.jpg">
      </a>
    </div>
  </div>
  <div class="tweet">
    <div class="profile-card_mp">
      <div class="avatar-container_mp_story">
        <a href="shop.php">
          <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
        </a>
      </div>
      <div class="content_mp">
        <h2 class="user-name_mp">
          <a href="shop.php">BUNNYS CLUB</a>
        </h2>
        <p class="user-bio_mp">吉原
        <span class="time_txt">1月25日 21:51</span>
        </p>
      </div>
    </div>
    <div class="body_txt">
      <a href="shop.php">
        <p>最近opでCalvin Kleinが人気です💗🥹💗
          <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
          <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
          <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
        </p>
        <img src="<?=$com_href?>/img/soap_02.jpg" loading="lazy">
      </a>
    </div>
  </div>
</div>
<!-- timeline -->

<div class="load_bt_box">
<button class="load_bt">更に読み込む</button>
<p class="iconloader">
<i class="fa-duotone fa-spinner fa-spin fa-3x fa-fw"></i>
</p>
</div>
</div>
<!-- tab-->
<div class="tab_content" id="design_content">
<ul class="talk-list_search">
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/suibi_soap.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">BUNNYS CLUB</a>
      </h3>
      <p class="talk-last-message">吉原 </p>
      <span class="talk-timestamp">最終更新日:04月05日 01:08 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/suibi_soap.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">BUNNYS CLUB</a>
      </h3>
      <p class="talk-last-message">吉原 </p>
      <span class="talk-timestamp">最終更新日:04月05日 01:08 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/suibi_soap.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">BUNNYS CLUB</a>
      </h3>
      <p class="talk-last-message">吉原 </p>
      <span class="talk-timestamp">最終更新日:04月05日 01:08 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/suibi_soap.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">BUNNYS CLUB</a>
      </h3>
      <p class="talk-last-message">吉原 </p>
      <span class="talk-timestamp">最終更新日:04月05日 01:08 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/suibi_soap.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">BUNNYS CLUB</a>
      </h3>
      <p class="talk-last-message">吉原 </p>
      <span class="talk-timestamp">最終更新日:04月05日 01:08 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/suibi_soap.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">BUNNYS CLUB</a>
      </h3>
      <p class="talk-last-message">吉原 </p>
      <span class="talk-timestamp">最終更新日:04月05日 01:08 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/suibi_soap.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">BUNNYS CLUB</a>
      </h3>
      <p class="talk-last-message">吉原 </p>
      <span class="talk-timestamp">最終更新日:04月05日 01:08 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/suibi_soap.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">BUNNYS CLUB</a>
      </h3>
      <p class="talk-last-message">吉原 </p>
      <span class="talk-timestamp">最終更新日:04月05日 01:08 </span>
    </div>
  </li>
  <li class="talk-item">
    <div class="talk-avatar_story">
      <a href="shop.php">
        <img src="<?=$com_href?>/img/suibi_soap.jpg" loading="lazy">
      </a>
    </div>
    <div class="talk-details">
      <h3 class="talk-name">
        <a href="shop.php">BUNNYS CLUB</a>
      </h3>
      <p class="talk-last-message">吉原 </p>
      <span class="talk-timestamp">最終更新日:04月05日 01:08 </span>
    </div>
  </li>
  <!-- 他のトークの項目も同様に追加する -->
</ul>

<div class="load_bt_box">
<button class="load_bt">更に読み込む</button>
<p class="iconloader">
<i class="fa-duotone fa-spinner fa-spin fa-3x fa-fw"></i>
</p>
</div>
</div>
<!-- tab-->
</div>
<!-- tabs -->


    <p class="box_sub_page2 cm_pre_line">吉原のソープランドの歴史は江戸時代の遊郭から。。。。<p>

    <?php include $inc_path .'/inc/footer_menu.php';?>
  </div>
  <!-- content -->
  <?php include $inc_path .'/inc/prof_modal.php';?>
</div>
<!-- container -->
<?php include $inc_path .'/inc/footer.php';?>
