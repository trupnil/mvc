<?php session_start(); ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html lang='en' class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/michaelsboost/pen/mmYxzP?limit=all&page=33&q=nav+tabs" />

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<style class="cp-pen-styles">body {
  background-color: #e9ebee;
}
textarea,
.form-control {
  border: 0;
  border-radius: 0;
  resize: none;
}
.topbar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1;
  padding: 6px 26px;
  height: 42px;
  background: #3b5e95;
  border-bottom: 1px solid #294c7b;
  overflow: hidden;
}
.topbar .right-group {
  float: right;
}
.topbar .right-group .link-group {
  position: relative;
  top: -4px;
  display: inline-block;
  padding: 0;
}
.topbar .right-group .link-group a {
  padding: 9px 8px;
  color: #fff;
  font-size: 12px;
}
.topbar .right-group .link-group a img {
  display: inline-block;
  width: 24px;
  height: 24px;
  margin-right: 9px;
}
.topbar .right-group .link-group a:hover {
  background: #355486;
  text-decoration: none;
}
.topbar .right-group .link-group:nth-child(2) a {
  margin-right: 16px;
  border-left: 1px solid #355485;
}
.topbar .right-group .notification-group {
  display: inline-block;
  position: relative;
  top: 3px;
}
.topbar .right-group .notification-group .link-group a {
  margin: 0;
  border: 0;
}
.topbar .right-group .notification-group a {
  color: #17253c;
  font-size: 21px;
}
.topbar .right-group .notification-group a:hover {
  color: #111;
  background: transparent;
}
.topbar .right-group .link-group:nth-child(4) a {
  margin-left: 16px;
  border-left: 1px solid #355485;
}
.topbar .search-box {
  display: inline-block;
  width: calc(100vw - 72%);
}
.topbar .search-box .input-group * {
  font-size: 12px;
  height: 25px;
  border: 1px solid #fff;
  background: #fff;
  outline: 0;
}
.topbar .search-box .input-group button {
  color: #7a7a7a;
  -webkit-transition: all ease 150ms;
  transition: all ease 150ms;
}
.topbar .search-box .input-group button:hover {
  color: #000;
}
.left-content {
  left: 0;
}
.left-content {
  position: fixed;
  top: 42px;
  bottom: 0;
  width: 250px;
  background: #e9ebee;
  overflow: auto;
}
.left-content .global-links {
  padding: 10px;
  margin-left: 10px;
}
.left-content .global-links a {
  display: inline-block;
  color: #000;
  font-size: 12px;
  width: 100%;
  padding: 2px 8px;
}
.left-content .global-links a img {
  width: 20px;
  height: 20px;
  margin-right: 6px;
}
.left-content .global-links .counter {
  float: right;
  color: #90949c;
}
.left-content .global-links .counter .fa-ellipsis-h {
  font-size: 20px;
}
.left-content .global-links .activepage {
  padding-top: 5px;
  background: #fff;
  border-radius: 2px;
  border: 1px solid #dddfe2;
}
.left-content .group-content h4 {
  margin: 20px 0 8px 0;
  font-size: 13px;
  color: #444;
  text-transform: uppercase;
}
.left-content a:last-child .fa-caret-down {
  margin-right: 12px;
}
.feed-content {
  position: absolute;
  top: 42px;
  bottom: 0;
  left: 250px;
  right: 0;
  padding: 12px 7px;
  background: #e9ebee;
  overflow: auto;
}
.feed-content .recentcontainer {
  border-radius: 2px;
  border: 1px solid #dddfe2;
  margin-bottom: 15px;
  overflow: hidden;
}
.feed-content .recentcontainer .newpostheader,
.feed-content .recentcontainer .newpostfooter {
  padding: 4px 5px;
  background: #f6f7f9;
}
.feed-content .recentcontainer .newpostheader li,
.feed-content .recentcontainer .newpostfooter li {
  display: inline-block;
  width: 100%;
  text-align: center;
}
.feed-content .recentcontainer .newpostheader li:first-child,
.feed-content .recentcontainer .newpostfooter li:first-child {
  float: left;
}
.feed-content .recentcontainer .newpostheader li:last-child,
.feed-content .recentcontainer .newpostfooter li:last-child {
  float: rght;
}
.feed-content .recentcontainer .newpostheader h4,
.feed-content .recentcontainer .newpostfooter h4 {
  font-size: 14px;
  margin: 10px 5px;
  color: #666;
}
.feed-content .recentcontainer .newpostheader a:first-child,
.feed-content .recentcontainer .newpostfooter a:first-child {
  margin-right: 5px;
}
.feed-content .recentcontainer .newpostheader a,
.feed-content .recentcontainer .newpostfooter a {
  font-size: 14px;
}
.feed-content .recentcontainer .newpostheader a img,
.feed-content .recentcontainer .newpostfooter a img {
  width: 40px;
  height: 40px;
  margin: 5px 5px 0 5px;
}
.feed-content .recentcontainer .newpostheader a .name,
.feed-content .recentcontainer .newpostfooter a .name {
  position: relative;
  top: -6px;
}
.feed-content .recentcontainer .newpostheader a .fa,
.feed-content .recentcontainer .newpostfooter a .fa {
  display: inline-block;
  margin: 5px;
}
.feed-content .recentcontainer .newpostheader > span,
.feed-content .recentcontainer .newpostfooter > span {
  position: relative;
  top: -6px;
  left: -4px;
  font-size: 14px;
}
.feed-content .recentcontainer .newpostheader p,
.feed-content .recentcontainer .newpostfooter p {
  position: relative;
  top: -22px;
  left: 55px;
  font-size: 12px;
}
.feed-content .recentcontainer .newpostheader p a,
.feed-content .recentcontainer .newpostfooter p a {
  font-size: 12px;
  color: #4b4f56;
  margin-right: 5px;
}
.feed-content .recentcontainer .newpostheader .rightsideofpost,
.feed-content .recentcontainer .newpostfooter .rightsideofpost {
  position: relative;
  top: -73px;
  float: right;
}
.feed-content .recentcontainer .newpostheader .rightsideofpost .personpostmenu,
.feed-content .recentcontainer .newpostfooter .rightsideofpost .personpostmenu {
  color: #4b4f56;
}
.feed-content .recentcontainer .newpostheader li a,
.feed-content .recentcontainer .newpostfooter li a {
  font-size: 14px;
  color: #4b4f56;
  margin-right: 5px;
}
.feed-content .recentcontainer .newpostheader li a .fa,
.feed-content .recentcontainer .newpostfooter li a .fa {
  display: inline-block;
  margin: 5px;
}
.feed-content .recentcontainer .community-counter {
  padding: 4px 5px;
  background: #f6f7f9;
}
.feed-content .recentcontainer .community-counter li a {
  font-size: 14px;
  color: #4b4f56;
  margin-right: 5px;
}
.feed-content .recentcontainer .community-counter li a .fa {
  display: inline-block;
  margin: 5px;
}
.feed-content .recentcontainer .newpost textarea,
.feed-content .recentcontainer .newpost .postcontent {
  display: inherit;
  padding: 10px;
  width: 100%;
  height: 100%;
  background: #f6f7f9;
}
.feed-content .recentcontainer .newpost .postcontent {
  position: relative;
  margin-top: -40px;
  padding-bottom: 40px;
  white-space: pre-line;
}
.feed-content .recentcontainer .newpostfooter {
  margin-top: 1px;
}
.feed-content .recentcontainer .commentpost {
  display: inherit;
  background: #f6f7f9;
  margin-top: -1px;
}
.feed-content .recentcontainer .commentpost img {
  margin: 10px;
  height: 40px;
}
.feed-content .recentcontainer .commentpost .input-group-btn {
  display: inline-block;
  background: #fff;
}
.feed-content .recentcontainer .commentpost .input-group-btn a {
  margin-top: 10px;
}
.feed-content .recentcontainer:nth-child(1) .newpostfooter li:first-child .fa {
  color: #96b756;
}
.feed-content .recentcontainer:nth-child(1) .newpostfooter li:nth-child(2) .fa {
  color: #f1c04e;
}
.feed-content .recentcontainer:nth-child(1) .newpostfooter li:last-child a:last-child {
  font-size: 20px;
}
.thirdcol-content {
  position: fixed;
  top: 42px;
  bottom: 0;
  width: 250px;
  background: #e9ebee;
  right: 0;
  display: block;
  width: 300px;
  padding: 12px 7px;
  background: #e9ebee;
  overflow-x: auto;
}
.thirdcol-content > div > a,
.thirdcol-content > div > p {
  font-size: 12px;
}
.thirdcol-content .section-content {
  border-radius: 2px;
  border: 1px solid #dddfe2;
  margin: 0 0 15px 0;
  overflow-y: hidden;
  padding: 4px 5px;
  background: #f6f7f9;
}
.thirdcol-content .section-content h4:nth-child(1) {
  font-size: 14px;
  margin: 6px;
  padding: 6px;
  color: #888;
}
.thirdcol-content .section-content h4:nth-child(1) a {
  float: right;
  color: #8a8a8a;
}
.thirdcol-content .section-content p a {
  display: block;
}
.thirdcol-content .section-content p a span:not(:first-child) {
  display: inline-block;
  margin-left: 4px;
  font-size: 9px;
  padding: 1px 2px;
  color: #545454;
  background: #fff;
  border: 1px solid #b8b8b8;
}
.thirdcol-content .section-content a {
  font-size: 14px;
  margin-right: 5px;
}
.thirdcol-content .section-content a img {
  width: 64px;
  height: 64px;
  margin: 5px 5px 0 5px;
}
.thirdcol-content .section-content a .fa {
  display: inline-block;
  margin: 5px;
}
.thirdcol-content .section-content p:nth-child(3) {
  text-align: right;
  margin: -20px 0 4px 0;
  padding: 2px;
  width: 80%;
}
.thirdcol-content .section-content p:nth-child(3) a {
  display: inline-block;
  position: relative;
  top: -18px;
}
.thirdcol-content .section-content p:nth-child(4) {
  margin-top: -64px;
  margin-left: 75px;
  font-size: 12px;
}
.thirdcol-content .section-content p:nth-child(4) a:not(:nth-child(1)) {
  font-size: 12px;
  color: #4b4f56;
  margin-right: 5px;
}
.thirdcol-content .section-content p:nth-child(7) {
  text-align: center;
}
.thirdcol-content .section-content p:nth-child(7) a {
  width: 20%;
  display: inline-block;
  color: #333;
}
.thirdcol-content .section-content p:nth-child(7) .fa {
  display: block;
}
.thirdcol-content .section-content .activetrend,
.thirdcol-content .section-content .activetrend .fa {
  color: #1273b8;
}
.thirdcol-content .section-content .trend-feed ul {
  margin: 0 30px;
  padding: 0;
  list-style: square url("http://i.imgur.com/Etzny0O.png");
}
.thirdcol-content .section-content .trend-feed ul li {
  font-size: 12px;
}
.thirdcol-content .section-content .trend-feed ul li span:nth-child(1) {
  color: #999;
}
.thirdcol-content .section-content .trend-feed div a {
  float: left;
  font-size: 12px;
  margin-top: 4px;
}
.thirdcol-content .section-content .trend-feed div a:first-child {
  padding: 4px 0 0 4px;
}
.thirdcol-content .section-content .trend-feed div a:last-child {
  float: right;
  padding: 4px 0 0 4px;
}
.thirdcol-content .section-content:nth-child(1) > a:nth-child(2) {
  float: right;
  color: #8a8a8a;
}
.thirdcol-content .section-content:nth-child(4) {
  font-size: 12px;
}
.thirdcol-content .section-content:nth-child(4) h4 {
  float: left;
}
.thirdcol-content .section-content:nth-child(4) a:nth-child(2) {
  margin-top: 10px;
  float: right;
}
.thirdcol-content .section-content:nth-child(4) div {
  padding: 5px;
}
.thirdcol-content .section-content:nth-child(4) div a {
  display: block;
}
.thirdcol-content .section-content:nth-child(4) div a img {
  width: 100%;
  height: auto;
}
.thirdcol-content .section-content:nth-child(4) div a:hover {
  text-decoration: none;
}
.thirdcol-content .section-content:nth-child(4) div div {
  padding: 5px 5px 0 5px;
  font-size: 12px;
}
.thirdcol-content .section-content:nth-child(4) div div div {
  padding: 0;
}
.thirdcol-content .section-content:nth-child(4) div div:nth-child(3) {
  color: #878787;
}
.thirdcol-content .section-content:nth-child(5) a {
  font-size: 12px;
}
.feed-content {
  right: 300px;
}
.right-content {
  display: none;
  position: fixed;
  top: 42px;
  bottom: 0;
  width: 250px;
  background: #e9ebee;
  right: 0;
  width: 275px;
  padding: 12px 7px;
  background: #e9ebee;
  overflow-x: auto;
  border-left: 1px solid #a3a3a3;
}
.right-content ul {
  list-style: none;
  padding: 0;
  margin: 0;
  height: 50%;
  overflow: auto;
}
.right-content ul li {
  display: block;
  padding: 5px 5px 15px 5px;
  width: 100%;
  border-bottom: 1px solid #a3a3a3;
  cursor: pointer;
}
.right-content ul:first-child {
  list-style: none;
  padding: 0;
  height: 50%;
  overflow: auto;
}
.right-content ul:first-child li {
  display: block;
  padding: 5px 5px 15px 5px;
  width: 100%;
  border-bottom: 1px solid #a3a3a3;
  cursor: pointer;
}
.right-content ul:first-child li a {
  padding: 5px;
  font-size: 12px;
}
.right-content ul:first-child li img {
  display: inline-block;
  width: 32px;
  height: 32px;
}
.right-content ul:first-child li b,
.right-content ul:first-child li span {
  color: #000;
}
.right-content ul:first-child li span {
  color: #545454;
}
.right-content ul:first-child li a:hover {
  text-decoration: none;
}
.right-content ul:first-child li:hover {
  background: #ccc;
}
.right-content ul:nth-child(2) {
  list-style: none;
  padding: 0;
  height: 50%;
  overflow: auto;
}
.right-content ul:nth-child(2) h4 {
  font-size: 12px;
  margin-top: 15px;
  color: #474747;
  text-transform: uppercase;
}
.right-content ul:nth-child(2) li {
  display: block;
  padding: 5px 5px 15px 5px;
  width: 100%;
  border-bottom: 1px solid #a3a3a3;
  cursor: pointer;
}
.right-content ul:nth-child(2) li a {
  padding: 5px;
  font-size: 12px;
}
.right-content ul:nth-child(2) li img {
  display: inline-block;
  width: 32px;
  height: 32px;
}
.right-content ul:nth-child(2) li b,
.right-content ul:nth-child(2) li span {
  color: #000;
}
.right-content ul:nth-child(2) li span {
  display: block;
  float: right;
  position: relative;
  top: 8px;
  font-size: 9px;
  padding: 1px 2px;
  color: #545454;
  background: #fff;
  border: 1px solid #b8b8b8;
}
.right-content ul:nth-child(2) li .fa {
  float: right;
  position: relative;
  top: 8px;
  color: #1f0;
}
.right-content ul:nth-child(2) li a:hover {
  text-decoration: none;
}
.right-content ul:nth-child(2) li:hover {
  background: #ccc;
}
@media all and (max-width: 700px) {
  .left-content {
    display: none;
  }
  .feed-content {
    left: 0;
  }
  .topbar .right-group > .link-group {
    display: none;
  }
}
@media all and (max-width: 1000px) {
  .thirdcol-content {
    display: none;
  }
  .feed-content {
    right: 0;
  }
}
@media all and (min-width: 1260px) {
  .feed-content {
    right: 250px;
  }
  .right-content {
    right: 0;
  }
}
@media all and (min-width: 1260px) {
  .feed-content {
    right: 575px;
  }
  .thirdcol-content {
    right: 275px;
  }
  .right-content {
    display: block;
  }
}
.pointer {
  cursor: pointer;
}
.ib {
  display: inline-block;
}
.fl {
  float: left;
}
.fr {
  float: right;
}
.tc {
  text-align: center;
}
</style></head><body>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

<div class="topbar">
  <a class="logo" href="javascript:void(0)">
    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QAOwBeAJXJ9VaZAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH4QUcFAwZEBLpsAAAAO5JREFUSMdj2Hrw+v+///79pzb4++/f/60Hr/9n/Pvv338mRkYGWoB///8zMP7///8/Aw0BCyWaL99+wXDk7D2Gdx+/M3CwszDw8bAziAvxMfg5aVFuQe+Cgwzr91/FKodsARM5hu89cQen4eiALAs27LtC2zi4+eA1Cr8q2YnBzVqNgYWZiTo++PbzNwrf2UIFq+FkW4AO2NlYqBsHpACiM5pN/DSiDFzRGcUgIyFAOx9IiPLRLoj4eTgwIpuqFkgK85IfB/ji48jCrIFLRaMWjAQL/tGwSv73/z8D047DNxloYcm///8Zdhy+yQAAwrOldG/7uKoAAAAASUVORK5CYII=" />
  </a>
  <div class="search-box">
    <div class="input-group">
      <input aria-describedby="basic-addon2" class="form-control" placeholder="Search Facebook" type="text" />
      <button class="input-group-addon pointer" id="basic-addon2">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
  <div class="right-group">
    <div class="link-group">
      <a href="javascript:void(0)">
        <img src="//i.imgur.com/5jInimY.jpg"><?php echo $_SESSION['userdata']->reg_email; ?>
      <a href="logout">Logout</a>
    </div>
    <div class="link-group">
      <a href="javascript:void(0)">Home</a>
    </div>
    <div class="notification-group">
      <div class="link-group">
        <a class="freqnotif" href="javascript:void(0)">
          <i class="fa fa-group"></i>
        </a>
      </div>
      <div class="link-group">
        <a class="msgnotif" href="javascript:void(0)">
          <i class="fa fa-comment"></i>
        </a>
      </div>
      <div class="link-group">
        <a class="notif" href="javascript:void(0)">
          <i class="fa fa-globe"></i>
        </a>
      </div>
      <div class="link-group">
        <a class="helpguide" href="javascript:void(0)">
          <i class="fa fa-question-circle"></i>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="left-content">
  <div class="global-links">
    <a href="javascript:void(0)">
      <img src="//i.imgur.com/5jInimY.jpg" /> First Last
      <span class="counter">1</span>
    </a>
    <a class="activepage" href="javascript:void(0)">
      <img src="http://brassnecktheatre.com/wp-content/uploads/2013/11/news-icon.png" /> News Feed
      <span class="counter">
        <i class="fa fa-ellipsis-h"></i>
      </span>
    </a>
    <a href="javascript:void(0)">
      <img src="http://icons.iconarchive.com/icons/wineass/ios7-redesign/512/Messages-icon.png" /> Messenger
      <span class="counter">1</span>
    </a>
    <div class="group-content">
      <h4>shortcuts</h4>
      <a href="javascript:void(0)">
        <img src="http://theieltscoach.com/wp-content/uploads/2015/03/IELTS-Speaking-Tips-Icon-2.png" /> Group name
        <span class="counter">1</span>
      </a>
      <a href="javascript:void(0)">
        <img src="http://theieltscoach.com/wp-content/uploads/2015/03/IELTS-Speaking-Tips-Icon-2.png" /> Group name
        <span class="counter">1</span>
      </a>
      <a href="javascript:void(0)">
        <img src="http://theieltscoach.com/wp-content/uploads/2015/03/IELTS-Speaking-Tips-Icon-2.png" /> Group name
        <span class="counter">1</span>
      </a>
      <a href="javascript:void(0)">
        <img src="http://theieltscoach.com/wp-content/uploads/2015/03/IELTS-Speaking-Tips-Icon-2.png" /> Group name
        <span class="counter">1</span>
      </a>
      <a href="javascript:void(0)">
        <img src="http://theieltscoach.com/wp-content/uploads/2015/03/IELTS-Speaking-Tips-Icon-2.png" /> Group name
        <span class="counter">1</span>
      </a>
      <a href="javascript:void(0)">
        <i class="fa fa-caret-down"></i>
        <span>See More...</span>
      </a>
    </div>
    <div class="group-content">
      <h4>explore</h4>
      <a href="javascript:void(0)">
        <img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/calendar-icon.png" /> Events
        <span class="counter">1</span>
      </a>
      <a href="javascript:void(0)">
        <img src="http://image.flaticon.com/icons/png/512/223/223120.png" /> Saved
        <span class="counter">1</span>
      </a>
      <a href="javascript:void(0)">
        <img src="http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-13/512/Webpage-icon.png" /> Pages
        <span class="counter">1</span>
      </a>
      <a href="javascript:void(0)">
        <img src="https://www.iconfinder.com/data/icons/unique-round-blue/93/group-512.png" /> Groups
        <span class="counter">1</span>
      </a>
      <a href="javascript:void(0)">
        <img src="http://www.thesuccesswriter.com/images/fundraising.png" /> Fundraisers
      <span class="counter">1</span>
      </a>
    <a href="javascript:void(0)">
      <i class="fa fa-caret-down"></i>
      <span>See More...</span>
    </a>
  </div>
    <div class="group-content">
      <h4>create</h4>
      <a href="javascript:void(0)">
        <img src="http://1agb93314bcf1knhv22id9u9.wpengine.netdna-cdn.com/wp-content/uploads/2015/02/Marketing_Advertising_Icon.png" /> Ad
      </a>
      <a href="javascript:void(0)">
        <img src="http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-13/512/Webpage-icon.png" /> Page
      </a>
      <a href="javascript:void(0)">
        <img src="https://www.iconfinder.com/data/icons/unique-round-blue/93/group-512.png" /> Group
      </a>
      <a href="javascript:void(0)">
        <img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/calendar-icon.png" /> Event
      </a>
      <a href="javascript:void(0)">
        <img src="http://www.thesuccesswriter.com/images/fundraising.png" /> Fundraiser
      </a>
    </div>
  </div>
</div>
<div class="feed-content">
  <div class="recentcontainer">
    <ul class="newpostheader nav nav-tabs nav-justified">
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-pencil"></i>
          <span>Create a Post</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-book"></i>
          <span>Media Album</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-video-camera"></i>
          <span>Live Video</span>
        </a>
      </li>
    </ul>
    <div class="newpost">
      <textarea placeholder="Post Something..."></textarea>
    </div>
    <ul class="newpostfooter nav nav-tabs nav-justified">
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-picture-o"></i>
          <span>Photo/Video</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-smile-o"></i>
          <span>Feeling/Activity</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-ellipsis-h"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="recentcontainer">
    <div class="newpostheader">
      <a href="javascript:void(0)">
        <img src="//i.imgur.com/5jInimY.jpg" />
        <span class="name">First Last</span>
      </a>
      <span>shared <a href="javascript:void(0)">Demyos's</a> <a href="javascript:void(0)">post</a>.</span>
      <p>
        <a class="date" href="javascript:void(0)">44 mins</a>
        <a href="javascript:void(0)">
          <i class="fa fa-globe"></i>
        </a>
      <div class="rightsideofpost">
        <a class="follow" href="javascript:void(0)">
          <i class="fa fa-star"></i>
        </a>
        <a class="personpostmenu" href="javascript:void(0)">
          <i class="fa fa-caret-down"></i>
        </a>
      </div>
      </p>
  </div>
    <div class="newpost">
      <div class="postcontent">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate sunt quasi in quam asperiores! Optio voluptate impedit eos ex nisi, molestias facilis sint cupiditate, dolores veritatis cum? Enim vel, qui!
      </div>
    </div>
    <ul class="newpostfooter nav nav-tabs nav-justified">
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-thumbs-up"></i>
          <span>Like</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" title="Leave a comment">
          <i class="fa fa-comment-o"></i>
          <span>Comment</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" title="Send this to friends or post it to your timeline">
          <i class="fa fa-share"></i>
          <span>Share</span>
        </a>
      </li>
    </ul>
    <ul class="community-counter nav nav-tabs nav-justified">
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-thumbs-up"></i>
          <span>1</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-comment-o"></i>
          <span>3</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-share"></i>
          <span>4</span>
        </a>
      </li>
    </ul>
    <div class="commentpost">
      <div class="input-group">
        <a href="javascript:void(0)">
          <img src="//i.imgur.com/5jInimY.jpg" />
        </a>

        <textarea class="form-control" placeholder="Write a comment..."></textarea>
        <div class="input-group-btn">
          <a class="btn btn-default" href="javascript:void(0)">
            <i class="fa fa-smile-o"></i>
          </a>
          <a class="btn btn-default" href="javascript:void(0)">
            <i class="fa fa-picture-o"></i>
          </a>
          <a class="btn btn-default" href="javascript:void(0)">
            <i class="fa fa-gift"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="recentcontainer">
    <div class="newpostheader">
      <h4>
        Suggested post
      </h4>
      <hr />
      <a href="javascript:void(0)">
        <img src="//i.imgur.com/5jInimY.jpg" />
        <span class="name">First Last</span>
      </a>
      <p>
        <a class="date" href="javascript:void(0)">Sponsored</a>
        <a href="javascript:void(0)">
          <i class="fa fa-globe"></i>
        </a>
      <div class="rightsideofpost">
        <a class="follow" href="javascript:void(0)">
          <i class="fa fa-star"></i>
        </a>
        <a class="personpostmenu" href="javascript:void(0)">
          <i class="fa fa-caret-down"></i>
        </a>
      </div>
      </p>
  </div>
    <div class="newpost">
      <div class="postcontent">
        We lose 48 football fields of forest every minute. :-(
By using "<a href="https://ecosia.org">Ecosia.org</a>" for your web searches you can help stop this trend.
Let's plant some trees together!
        <div class="tc">
          <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fecosia%2Fvideos%2F10154359809121611%2F&show_text=0&width=400" width="400" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
        </div>
      </div>
    </div>
    <ul class="newpostfooter nav nav-tabs nav-justified">
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-thumbs-up"></i>
          <span>Like</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" title="Leave a comment">
          <i class="fa fa-comment-o"></i>
          <span>Comment</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" title="Send this to friends or post it to your timeline">
          <i class="fa fa-share"></i>
          <span>Share</span>
        </a>
      </li>
    </ul>
    <ul class="community-counter nav nav-tabs nav-justified">
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-thumbs-up"></i>
          <span>1</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-comment-o"></i>
          <span>3</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-share"></i>
          <span>4</span>
        </a>
      </li>
    </ul>
    <div class="commentpost">
      <div class="input-group">
        <a href="javascript:void(0)">
          <img src="//i.imgur.com/5jInimY.jpg" />
        </a>

        <textarea class="form-control" placeholder="Write a comment..."></textarea>
        <div class="input-group-btn">
          <a class="btn btn-default" href="javascript:void(0)">
            <i class="fa fa-smile-o"></i>
          </a>
          <a class="btn btn-default" href="javascript:void(0)">
            <i class="fa fa-picture-o"></i>
          </a>
          <a class="btn btn-default" href="javascript:void(0)">
            <i class="fa fa-gift"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="recentcontainer">
    <div class="newpostheader">
      <a href="javascript:void(0)">
        <img src="//i.imgur.com/5jInimY.jpg" />
        <span class="name">First Last</span>
      </a>
      <p>
        <a class="date" href="javascript:void(0)">44 mins</a>
        <a href="javascript:void(0)">
          <i class="fa fa-globe"></i>
        </a>
      <div class="rightsideofpost">
        <a class="follow" href="javascript:void(0)">
          <i class="fa fa-star"></i>
        </a>
        <a class="personpostmenu" href="javascript:void(0)">
          <i class="fa fa-caret-down"></i>
        </a>
      </div>
      </p>
  </div>
    <div class="newpost">
      <div class="postcontent">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate sunt quasi in quam asperiores! Optio voluptate impedit eos ex nisi, molestias facilis sint cupiditate, dolores veritatis cum? Enim vel, qui!
      </div>
    </div>
    <ul class="newpostfooter nav nav-tabs nav-justified">
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-thumbs-up"></i>
          <span>Like</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" title="Leave a comment">
          <i class="fa fa-comment-o"></i>
          <span>Comment</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" title="Send this to friends or post it to your timeline">
          <i class="fa fa-share"></i>
          <span>Share</span>
        </a>
      </li>
    </ul>
    <ul class="community-counter nav nav-tabs nav-justified">
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-thumbs-up"></i>
          <span>1</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-comment-o"></i>
          <span>3</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          <i class="fa fa-share"></i>
          <span>4</span>
        </a>
      </li>
    </ul>
    <div class="commentpost">
      <div class="input-group">
        <a href="javascript:void(0)">
          <img src="//i.imgur.com/5jInimY.jpg" />
        </a>

        <textarea class="form-control" placeholder="Write a comment..."></textarea>
        <div class="input-group-btn">
          <a class="btn btn-default" href="javascript:void(0)">
            <i class="fa fa-smile-o"></i>
          </a>
          <a class="btn btn-default" href="javascript:void(0)">
            <i class="fa fa-picture-o"></i>
          </a>
          <a class="btn btn-default" href="javascript:void(0)">
            <i class="fa fa-gift"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="thirdcol-content">
  <div class="section-content">
    <h4>
      Your Pages
      
      <a href="javascript:void(0)">
        <i class="fa fa-caret-up"></i>
      </a>
      <hr>
    </h4>
    
    <a href="javascript:void(0)">
      <i class="fa fa-caret-down"></i>
    </a>
    <a href="javascript:void(0)">
      <img src="//i.imgur.com/k2t0gee.png" />
    </a>
    <p>
      <a href="javascript:void(0)">
        <span>Your Page</span>
      </a>
      <a href="javascript:void(0)">
        <i class="fa fa-comment"></i>
        Messages
      </a>
      <a href="javascript:void(0)">
        <i class="fa fa-globe"></i>
        Notifications <span>1</span>
      </a>
      <hr>
    </p>
    <p>
      <a href="javascript:void(0)">
        <i class="fa fa-pencil-square-o"></i>
        Publish
      </a>
      <a href="javascript:void(0)">
        <i class="fa fa-camera"></i>
        Photo
      </a>
      <a href="javascript:void(0)">
        <i class="fa fa-calendar"></i>
        Event
      </a>
      <a href="javascript:void(0)">
        <i class="fa fa-bell"></i>
        Promote
      </a>
    </p>
  </div>
  <div class="section-content">
    <a href="javascript:void(0)">
      <i class="fa fa-calendar"></i>
      1 event invite
    </a>
  </div>
  <div class="section-content">
    <h4>
      Trending
      
      <!-- entertainment -->
      <a href="javascript:void(0)">
        <i class="fa fa-video-camera"></i>
      </a>
      <!-- sports -->
      <a href="javascript:void(0)">
        <i class="fa fa-futbol-o"></i>
      </a>
      <!-- science and technology -->
      <a href="javascript:void(0)">
        <i class="fa fa-flask"></i>
      </a>
      <!-- politics -->
      <a href="javascript:void(0)">
        <i class="fa fa-balance-scale"></i>
      </a>
      <!-- top trends -->
      <a class="activetrend" href="javascript:void(0)">
        <i class="fa fa-line-chart"></i>
      </a>
    </h4>
    <div class="trend-feed">
      <ul>
        <li>
          <a href="javascript:void(0)">Alex Honnold</a>
          <span>'Free solo' climber conquers El Capitan without rope, safety gear ‑ <span>msn.com</span></span>
        </li>
        <li>
          <a href="javascript:void(0)">Michael Bloomberg</a>
          <span>Michael Bloomberg Pledges $15 Million For Paris Climate Pact ‑ <span>huffingtonpost.com</span></span>
        </li>
        <li>
          <a href="javascript:void(0)">Theresa May</a>
          <span>UK PM May's lead cut to just 1 point over Labour - Survation poll ‑ <span>reuters.com</span></span>
        </li>
      </ul>
      <div>
        <a href="javascript:void(0)">
          <i class="fa fa-caret-down"></i> 
          See More
        </a>
        <a href="javascript:void(0)">
          <i class="fa fa-question"></i> 
        </a>
      </div>
    </div>
  </div>
  <div class="section-content">
    <h4>
      Sponsored
    </h4>
    
    <a href="javascript:void(0)">
      Create Ad
    </a>
    <div>
      <a href="javascript:void(0)">
        <img src="//i.imgur.com/pZ2VCSf.png">
        <div>
          Play at Global Poker!
          <div>
            <small>GlobalPoker.com</small>
          </div>
        </div>
        <div>
          Real Poker. Real Winnings. Legally Cash Out via PayPal
        </div>
      </a>
    </div>
    <div>
      <a href="javascript:void(0)">
        <img src="//i.imgur.com/2miHaRa.png">
        <div>
          How To Start Your Own Social Media Marketing Agency and Get Small Businesses To Hire You
        </div>
        <div>
          Tai Lopez went from broke & sleeping on his mom's sofa to becoming a social media mogul an...
        </div>
      </a>
    </div>
  </div>
  <div class="section-content">
    <a href="javascript:void(0)">English (US)</a> · <a href="javascript:void(0)">Español</a> · <a href="javascript:void(0)">Português (Brasil)</a> · <a href="javascript:void(0)">Français (France)</a> · <a href="javascript:void(0)">Deutsch</a>
  </div>

  <div>
    <a href="javascript:void(0)">Privacy</a> · <a href="javascript:void(0)">Terms</a> · <a href="javascript:void(0)">Advertising</a> · <a href="javascript:void(0)">Ad Choices</a> · <a href="javascript:void(0)">Cookies</a> · <a href="javascript:void(0)">More</a>
    <p>
      Facebook © 2017
    </p>
  </div>
</div>
<div class="right-content">
  <ul>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <span>likes First Name's post</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <span>likes First Name's post</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <span>likes First Name's post</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <span>likes First Name's post</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <span>likes First Name's post</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <span>likes First Name's post</span>
      </a>
    </li>
  </ul>
  <ul>
    <h4>Your Pages</h4>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>Page Name</b> <span>1</span>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>Page Name</b>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>Page Name</b> <span>2</span>
      </a>
    </li>
    <h4>Contacts</h4>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <i class="fa fa-circle"></i>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <i class="fa fa-circle"></i>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <i class="fa fa-circle"></i>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <i class="fa fa-circle"></i>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <i class="fa fa-circle"></i>
      </a>
    </li>
  </ul>
</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
<script >(function() {


}).call(this);

//# sourceURL=pen.js
</script>
</body></html>