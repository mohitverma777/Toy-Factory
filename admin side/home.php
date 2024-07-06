<?php
  include("admin_display.php");
  include('commonfunction.php');
  include('stats_display.php');
  include('order_stats.php');
  include('total_sales_stats.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .box-container{
  display: flex;
  flex-wrap: wrap;
  margin-top: 8px;
  align-content: space-between;
}
.box{
  padding-top: 30px;
  padding-bottom: 30px;

  border-radius: 6px;
  width: 300px;
  margin-left: 80px;
  margin-right: 80PX;
  
  background: #2c394f;
}
    form {
      flex-direction: column;
      margin-top: 20px;
      height: 100%;
      margin-left: 40px;
    }
    .button {
      margin-left: 10px;
      border-radius: 2px;
      border: 1px solid var(--action-color);
      background-color: var(--action-color);
      color: #FFFFFF;
      font-size: 12px;
      padding: 8px 15px;
      transition: transform 80ms ease-in;
      cursor: pointer;
    }
    button:active {
      transform: scale(0.95);
    }

button:focus {
	outline: none;
}
    input {
      background-color: #eee;
      border: none;
      padding: 10px 15px;
      margin: 8px 0;
      border-radius: 6px;
    }
.box ul li{
  margin-top: 6px;
}

/*  */

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap");
* {
  box-sizing: border-box;
}

:root {
  --app-bg-dark: #01081f;
  --app-bg-before: linear-gradient(180deg, rgba(1,8,31,0) 0%, rgba(1,8,31,1) 100%);
  --app-bg-before-2: linear-gradient(0deg, rgba(1,8,31,0) 0%, rgba(1,8,31,1) 100%);
  --app-bg-light: #151c32;
  --app-logo: #3d7eff;
  --nav-link: #5e6a81;
  --nav-link-active: #fff;
  --list-item-hover: #0c1635;
  --main-color: #fff;
  --secondary-color: #5e6a81;
  --color-light: rgba(52, 129, 210, .2);
  --warning-bg: #ffe5e5;
  --warning-icon: #ff8181;
  --applicant-bg: #e3fff1;
  --applicant-icon: #61e1a1;
  --close-bg: #fff8e5;
  --close-icon: #fdbc64;
  --draft-bg: #fed8b3;
  --draft-icon: #e9780e;
}

.app-main {
  flex: 1;
  height: 100%;
  overflow-y: auto;
  overflow-x: hidden;
  background-color: var(--app-bg-light);
  padding: 24px;
  background: radial-gradient(circle, #051340 1%, #040f32 100%);
}

.app-right {
  flex-basis: 320px;
  width: 320px;
  background-color: var(--app-bg-dark);
  height: 100%;
  padding: 64px 0 0 0;
  display: flex;
  flex-direction: column;
  position: relative;
  transition: all 0.4s ease-in;
}
.app-right:before {
  content: "";
  position: absolute;
  bottom: 0;
  height: 48px;
  width: 100%;
  background-image: var(--app-bg-before);
  z-index: 1;
}
.app-right.show {
  right: 0;
  opacity: 1;
}
.app-right .close-right {
  display: none;
}

.app-right-content {
  flex: 1;
  height: 100%;
  overflow-y: auto;
  overflow-x: hidden;
}

.app-logo {
  display: flex;
  align-items: center;
  color: var(--app-logo);
  margin-right: 16px;
  padding: 0 24px;
}
.app-logo span {
  color: #fff;
  display: inline-block;
  line-height: 24px;
  font-size: 16px;
  margin-left: 16px;
}

ul {
  list-style-type: none;
  padding: 0;
}

a {
  text-decoration: none;
  cursor: pointer;
}

button {
  cursor: pointer;
}

.nav-list {
  margin-top: 40px;
}

.nav-list-item {
  margin-bottom: 12px;
}
.nav-list-item:not(.active):hover {
  background-color: var(--list-item-hover);
}
.nav-list-item.active .nav-list-link {
  color: var(--nav-link-active);
}
.nav-list-item.active .nav-list-link:after {
  height: 100%;
  opacity: 1;
}
.nav-list-item.active svg {
  stroke: var(--app-logo);
}

.nav-list-link {
  font-weight: 300;
  font-size: 14px;
  line-height: 24px;
  padding: 8px 24px;
  color: var(--nav-link);
  display: flex;
  align-items: center;
  position: relative;
}
.nav-list-link svg {
  margin-right: 12px;
}
.nav-list-link:after {
  content: "";
  height: 100%;
  width: 2px;
  background-color: var(--app-logo);
  right: 0;
  top: 0;
  position: absolute;
  border-radius: 2px;
  opacity: 0;
  height: 0;
}

.open-right-area {
  display: none;
  justify-content: center;
  align-items: center;
  border: none;
  background-color: var(--app-bg-dark);
  border-radius: 4px;
  height: 40px;
  width: 40px;
  padding: 0;
}

.main-header-line {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 16px;
}
.main-header-line h1 {
  color: var(--main-color);
  margin: 0;
  font-size: 24px;
  line-height: 32px;
}
.main-header-line input {
  border-radius: 4px;
  background-color: var(--color-light);
  border: none;
  border: 1px solid var(--color-light);
  color: var(--main-color);
  height: 32px;
  padding: 0 8px 0 32px;
  font-size: 14px;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%233481d2' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
  background-position: center left 10px;
  background-repeat: no-repeat;
  background-size: 16px;
  outline: none;
  transition: 0.2s;
  width: 100%;
  max-width: 400px;
  margin-left: 16px;
}
.main-header-line input:placeholder {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.6);
}
.main-header-line input:hover, .main-header-line input:focus {
  border: 1px solid #3481d2;
  box-shadow: 0 0 0 3px var(--color-light);
}

.chart-row {
  display: flex;
  justify-content: space-between;
  margin: 0 -8px;
}
.chart-row.three .chart-container-wrapper {
  width: 33.3%;
}
.chart-row.three .chart-container-wrapper .chart-container {
  justify-content: space-between;
}
.chart-row.two .big {
  flex: 1;
  max-width: 77.7%;
}
.chart-row.two .big .chart-container {
  flex-direction: column;
}
.chart-row.two .small {
  width: 33.3%;
}
.chart-row.two .small .chart-container {
  flex-direction: column;
}
.chart-row.two .small .chart-container + .chart-container {
  margin-top: 16px;
}

.line-chart {
  width: 100%;
  margin-top: 24px;
}

.chart-container {
  width: 100%;
  border-radius: 10px;
  background-color: var(--app-bg-dark);
  padding: 16px;
  display: flex;
  align-items: center;
}
.chart-container.applicants {
  max-height: 336px;
  overflow-y: auto;
}

.chart-container-wrapper {
  padding: 8px;
}

.chart-info-wrapper {
  flex-shrink: 0;
  flex-basis: 120px;
}
.chart-info-wrapper h2 {
  color: var(--secondary-color);
  font-size: 12px;
  line-height: 16px;
  font-weight: 600;
  text-transform: uppercase;
  margin: 0 0 8px 0;
}
.chart-info-wrapper span {
  color: var(--main-color);
  font-size: 24px;
  line-height: 32px;
  font-weight: 500;
}

.chart-svg {
  position: relative;
  max-width: 90px;
  min-width: 40px;
  flex: 1;
}

.circle-bg {
  fill: none;
  stroke: #eee;
  stroke-width: 1.2;
}

.circle {
  fill: none;
  stroke-width: 1.6;
  stroke-linecap: round;
  -webkit-animation: progress 1s ease-out forwards;
          animation: progress 1s ease-out forwards;
}

.circular-chart.orange .circle {
  stroke: #ff9f00;
}
.circular-chart.orange .circle-bg {
  stroke: #776547;
}
.circular-chart.blue .circle {
  stroke: #00cfde;
}
.circular-chart.blue .circle-bg {
  stroke: #557b88;
}
.circular-chart.pink .circle {
  stroke: #ff7dcb;
}
.circular-chart.pink .circle-bg {
  stroke: #6f5684;
}

.percentage {
  fill: #fff;
  font-size: 0.5em;
  text-anchor: middle;
  font-weight: 400;
}

@-webkit-keyframes progress {
  0% {
    stroke-dasharray: 0 100;
  }
}

@keyframes progress {
  0% {
    stroke-dasharray: 0 100;
  }
}
.chart-container-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  margin-bottom: 12px;
}
.chart-container-header h2 {
  margin: 0;
  color: var(--main-color);
  font-size: 12px;
  line-height: 16px;
  opacity: 0.8;
}
.chart-container-header span {
  color: var(--app-logo);
  font-size: 12px;
  line-height: 16px;
}

.acquisitions-bar {
  width: 100%;
  height: 4px;
  border-radius: 4px;
  margin-top: 16px;
  margin-bottom: 8px;
  display: flex;
}

.bar-progress {
  height: 4px;
  display: inline-block;
}
.bar-progress.applications {
  background-color: #ff7dcb;
}
.bar-progress.shortlisted {
  background-color: #00cfde;
}
.bar-progress.on-hold {
  background-color: #fdac42;
}
.bar-progress.rejected {
  background-color: #ff5c5c;
}

.progress-bar-info {
  display: flex;
  align-items: center;
  margin-top: 8px;
  width: 100%;
}

.progress-color {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin-right: 8px;
}
.progress-color.applications {
  background-color: #ff7dcb;
}
.progress-color.shortlisted {
  background-color: #00cfde;
}
.progress-color.on-hold {
  background-color: #fdac42;
}
.progress-color.rejected {
  background-color: #ff5c5c;
}

.progress-type {
  color: var(--secondary-color);
  font-size: 12px;
  line-height: 16px;
}

.progress-amount {
  color: var(--secondary-color);
  font-size: 12px;
  line-height: 16px;
  margin-left: auto;
}

.applicant-line {
  display: flex;
  align-items: center;
  width: 100%;
  margin-top: 12px;
}
.applicant-line img {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  -o-object-fit: cover;
     object-fit: cover;
  margin-right: 10px;
  flex-shrink: 0;
}

.applicant-info span {
  color: var(--main-color);
  font-size: 14px;
  line-height: 16px;
}
.applicant-info p {
  margin: 4px 0;
  font-size: 12px;
  line-height: 16px;
  color: var(--secondary-color);
}

.profile-box {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
}
.profile-box:before {
  content: "";
  position: absolute;
  top: 100%;
  height: 48px;
  width: 100%;
  background-image: var(--app-bg-before-2);
  z-index: 1;
}

.profile-photo-wrapper {
  width: 80px;
  height: 80px;
  overflow: hidden;
  border-radius: 50%;
  margin-bottom: 16px;
}
.profile-photo-wrapper img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.profile-text, .profile-subtext {
  font-size: 12px;
  line-height: 16px;
  color: var(--secondary-color);
  margin: 0 0 8px 0;
}

.profile-text {
  font-weight: 600;
}

.app-right-section-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 16px;
  margin-top: 16px;
}
.app-right-section-header h2 {
  font-size: 14px;
  line-height: 24px;
  color: var(--secondary-color);
}
.app-right-section-header span {
  display: inline-block;
  color: var(--secondary-color);
  position: relative;
}
.app-right-section-header span.notification-active:before {
  content: "";
  position: absolute;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background-color: var(--app-logo);
  top: -1px;
  right: -1px;
  box-shadow: 0 0 0 2px var(--app-bg-dark);
}

.message-line {
  display: flex;
  align-items: center;
  padding: 8px 16px;
  margin-bottom: 8px;
}
.message-line:hover {
  background-color: var(--list-item-hover);
}
.message-line img {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  -o-object-fit: cover;
     object-fit: cover;
  margin-right: 8px;
}

.message-text-wrapper {
  max-width: calc(100% - 48px);
}

.message-text {
  font-size: 14px;
  line-height: 16px;
  color: var(--main-color);
  margin: 0;
  opacity: 0.8;
  width: 100%;
}

.message-subtext {
  font-size: 12px;
  line-height: 16px;
  color: var(--secondary-color);
  margin: 4px 0 0 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  width: 100%;
}

.activity-line {
  padding: 8px 16px;
  display: flex;
  align-items: flex-start;
  margin-bottom: 8px;
}

.activity-link {
  font-size: 12px;
  line-height: 16px;
  color: var(--app-logo);
  text-decoration: underline;
}

.activity-text {
  font-size: 12px;
  line-height: 16px;
  color: var(--secondary-color);
  width: 100%;
  margin: 0;
}
.activity-text strong {
  color: #fff;
  opacity: 0.4;
  font-weight: 500;
}

.activity-icon {
  border-radius: 8px;
  width: 32px;
  height: 32px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-shrink: 0;
  margin-right: 8px;
}
.activity-icon.warning {
  background-color: var(--warning-bg);
  color: var(--warning-icon);
}
.activity-icon.applicant {
  background-color: var(--applicant-bg);
  color: var(--applicant-icon);
}
.activity-icon.close {
  background-color: var(--close-bg);
  color: var(--close-icon);
}
.activity-icon.draft {
  background-color: var(--draft-bg);
  color: var(--draft-icon);
}

.action-buttons {
  display: flex;
  align-items: center;
}

.menu-button {
  width: 40px;
  height: 40px;
  margin-left: 8px;
  display: none;
  justify-content: center;
  align-items: center;
  padding: 0;
  background-color: var(--app-bg-dark);
  border: none;
  color: var(--main-color);
  border-radius: 4px;
}

.close-menu {
  position: absolute;
  top: 16px;
  right: 16px;
  display: none;
  align-items: center;
  justify-content: center;
  border: none;
  background-color: transparent;
  padding: 0;
  color: var(--main-color);
  cursor: pointer;
}

@media screen and (max-width: 1350px) {
  .app-right {
    flex-basis: 240px;
    width: 240px;
  }

  .app-left {
    flex-basis: 200px;
  }
}
@media screen and (max-width: 1200px) {
  .app-right {
    position: absolute;
    opacity: 0;
    top: 0;
    z-index: 2;
    height: 100%;
    width: 320px;
    right: -100%;
    box-shadow: 0 0 10px 5px rgba(1, 8, 31, 0.4);
  }
  .app-right .close-right {
    position: absolute;
    top: 16px;
    right: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    background-color: transparent;
    padding: 0;
    color: var(--main-color);
    cursor: pointer;
  }

  .app-main .open-right-area {
    display: flex;
    color: var(--main-color);
  }
}
@media screen and (max-width: 1180px) {
  .chart-row.two {
    flex-direction: column;
  }

  .chart-row.two .big {
    max-width: 100%;
  }

  .chart-row.two .small {
    display: flex;
    justify-content: space-between;
    width: 100%;
  }
  .chart-row.two .small .chart-container {
    width: calc(50% - 8px);
  }
  .chart-row.two .small .chart-container.applicants {
    margin-top: 0;
  }
}
@media screen and (max-width: 920px) {
  .menu-button {
    display: flex;
  }

  .app-left {
    position: absolute;
    opacity: 0;
    top: 0;
    z-index: 2;
    height: 100%;
    width: 320px;
    right: -100%;
    box-shadow: 0 0 10px 5px rgba(1, 8, 31, 0.4);
  }

  .close-menu {
    display: flex;
  }
}
@media screen and (max-width: 650px) {
  .chart-row.three {
    flex-direction: column;
  }

  .chart-row.three .chart-container-wrapper {
    width: 100%;
  }

  .chart-svg {
    min-height: 60px;
    min-width: 40px;
  }
}
@media screen and (max-width: 520px) {
  .chart-row.two .small {
    flex-direction: column;
  }

  .chart-row.two .small .chart-container {
    width: 100%;
  }
  .chart-row.two .small .chart-container.applicants {
    margin-top: 16px;
  }

  .main-header-line h1 {
    font-size: 14px;
  }
}
    </style>
</head>
<body>
    <div class="app-container">
        <div class="sidebar">
          <div class="sidebar-header">
            <div class="app-icon">
              <span><b>ToyFactory</b></span>
            </div>
          </div>
          <ul class="sidebar-list">
          <li class="sidebar-list-item active">
              <a href="home.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                <span>Home</span>
              </a>
            </li>
            <li class="sidebar-list-item ">
              <a href="customer.php">
              <svg fill="#f8f7f7" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" stroke="#f8f7f7"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>users</title> <path d="M16 21.916c-4.797 0.020-8.806 3.369-9.837 7.856l-0.013 0.068c-0.011 0.048-0.017 0.103-0.017 0.16 0 0.414 0.336 0.75 0.75 0.75 0.357 0 0.656-0.25 0.731-0.585l0.001-0.005c0.875-3.885 4.297-6.744 8.386-6.744s7.511 2.859 8.375 6.687l0.011 0.057c0.076 0.34 0.374 0.59 0.732 0.59 0 0 0.001 0 0.001 0h-0c0.057-0 0.112-0.007 0.165-0.019l-0.005 0.001c0.34-0.076 0.59-0.375 0.59-0.733 0-0.057-0.006-0.112-0.018-0.165l0.001 0.005c-1.045-4.554-5.055-7.903-9.849-7.924h-0.002zM9.164 10.602c0 0 0 0 0 0 2.582 0 4.676-2.093 4.676-4.676s-2.093-4.676-4.676-4.676c-2.582 0-4.676 2.093-4.676 4.676v0c0.003 2.581 2.095 4.673 4.675 4.676h0zM9.164 2.75c0 0 0 0 0 0 1.754 0 3.176 1.422 3.176 3.176s-1.422 3.176-3.176 3.176c-1.754 0-3.176-1.422-3.176-3.176v0c0.002-1.753 1.423-3.174 3.175-3.176h0zM22.926 10.602c2.582 0 4.676-2.093 4.676-4.676s-2.093-4.676-4.676-4.676c-2.582 0-4.676 2.093-4.676 4.676v0c0.003 2.581 2.095 4.673 4.675 4.676h0zM22.926 2.75c1.754 0 3.176 1.422 3.176 3.176s-1.422 3.176-3.176 3.176c-1.754 0-3.176-1.422-3.176-3.176v0c0.002-1.753 1.423-3.174 3.176-3.176h0zM30.822 19.84c-0.878-3.894-4.308-6.759-8.406-6.759-0.423 0-0.839 0.031-1.246 0.089l0.046-0.006c-0.049 0.012-0.092 0.028-0.133 0.047l0.004-0.002c-0.751-2.129-2.745-3.627-5.089-3.627-2.334 0-4.321 1.485-5.068 3.561l-0.012 0.038c-0.017-0.004-0.030-0.014-0.047-0.017-0.359-0.053-0.773-0.084-1.195-0.084-0.002 0-0.005 0-0.007 0h0c-4.092 0.018-7.511 2.874-8.392 6.701l-0.011 0.058c-0.011 0.048-0.017 0.103-0.017 0.16 0 0.414 0.336 0.75 0.75 0.75 0.357 0 0.656-0.25 0.731-0.585l0.001-0.005c0.737-3.207 3.56-5.565 6.937-5.579h0.002c0.335 0 0.664 0.024 0.985 0.070l-0.037-0.004c-0.008 0.119-0.036 0.232-0.036 0.354 0.006 2.987 2.429 5.406 5.417 5.406s5.411-2.419 5.416-5.406v-0.001c0-0.12-0.028-0.233-0.036-0.352 0.016-0.002 0.031 0.005 0.047 0.001 0.294-0.044 0.634-0.068 0.98-0.068 0.004 0 0.007 0 0.011 0h-0.001c3.379 0.013 6.203 2.371 6.93 5.531l0.009 0.048c0.076 0.34 0.375 0.589 0.732 0.59h0c0.057-0 0.112-0.007 0.165-0.019l-0.005 0.001c0.34-0.076 0.59-0.375 0.59-0.733 0-0.057-0.006-0.112-0.018-0.165l0.001 0.005zM16 18.916c-0 0-0 0-0.001 0-2.163 0-3.917-1.753-3.917-3.917s1.754-3.917 3.917-3.917c2.163 0 3.917 1.754 3.917 3.917 0 0 0 0 0 0.001v-0c-0.003 2.162-1.754 3.913-3.916 3.916h-0z"></path> </g></svg>
                <span>Customers</span>
              </a>
            </li>
            <li class="sidebar-list-item ">
              <a href="orders.php">
              <svg fill="#ffffff" width="20px" height="20px" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg">
<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <defs> <style> .cls-1 { fill: none; } </style> </defs> <path d="M29.4819,8.624l-10-5.5a1,1,0,0,0-.9638,0l-10,5.5a1,1,0,0,0,0,1.752L18,15.5913V26.3086l-3.0362-1.6693L14,26.3912l4.5181,2.4848a.9984.9984,0,0,0,.9638,0l10-5.5A1,1,0,0,0,30,22.5V9.5A1,1,0,0,0,29.4819,8.624ZM19,5.1416,26.9248,9.5,19,13.8584,11.0752,9.5Zm9,16.7671-8,4.4V15.5913l8-4.4Z"/> <rect x="2" y="14" width="8" height="2" transform="translate(12 30) rotate(-180)"/> <rect x="4" y="22" width="8" height="2" transform="translate(16 46) rotate(-180)"/> <rect x="6" y="18" width="8" height="2" transform="translate(20 38) rotate(-180)"/> <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/> </g>

</svg>
                <span>Orders</span>
              </a>
            </li>
            <li class="sidebar-list-item ">
              <a href="Manage.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-box">
                <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                <path d="M14.5 5.5L18 9l-9 9H6v-3.5L14.5 5.5z"></path>
              </svg>

                <span>Manage</span>
              </a>
            </li>
            <li class="sidebar-list-item ">
              <a href="products.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                <span>Products</span>
              </a>
            </li>
            <li class="sidebar-list-item">
              <a href="inbox.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
                <span>Inbox</span>
              </a>
            </li>
            <li class="sidebar-list-item">
              <a href="policy.php">
              <svg fill="#ffffff" viewBox="0 0 32 32" id="icon" width="20" height="20" xmlns="http://www.w3.org/2000/svg" ><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;}</style></defs><title>policy</title><path d="M30,18A6,6,0,1,0,20,22.46v7.54l4-1.8926,4,1.8926V22.46A5.98,5.98,0,0,0,30,18Zm-4,8.84-2-.9467L22,26.84V23.65a5.8877,5.8877,0,0,0,4,0ZM24,22a4,4,0,1,1,4-4A4.0045,4.0045,0,0,1,24,22Z"></path><rect x="9" y="14" width="7" height="2"></rect><rect x="9" y="8" width="10" height="2"></rect><path d="M6,30a2.0021,2.0021,0,0,1-2-2V4A2.0021,2.0021,0,0,1,6,2H22a2.0021,2.0021,0,0,1,2,2V8H22V4H6V28H16v2Z"></path><rect id="_Transparent_Rectangle_" data-name="<Transparent Rectangle>" class="cls-1" width="32" height="32"></rect></g></svg>
                <span>Policy</span>
              </a>
            </li>
            
           
          </ul>
          
          <div class="account-info">
            <div class="account-info-picture">
            <?php echo "<img src='$image_path' class='profile' height='25px' width='25px'>";?>
            </div>
            <div class="account-info-name"><?php echo $name;?></div>
            <button class="account-info-more" style="cursor:pointer;">
              <!-- <svg onclick="window.location.href ='admininfo.php'" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg> -->
            </button>
          </div>
          <button class=" app-content-headerButton" onclick=""><a href="logout.php" class=" app-content-headerButton" style="Text-decoration:none" onclick="return confirm('Are you sure you want to Logout?');">Logout</a></button>
        </div>

        
        <div class="app-content">
          <div class="main-header-line">
            <h1>Home</h1>
            <div class="action-buttons">
              <button class="open-right-area">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            </button>
            <button class="menu-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            </button>
            </div>
          </div>
          <div class="chart-row three">
            <div class="chart-container-wrapper">
              <div class="chart-container">
                <div class="chart-info-wrapper">
                  <h2>Total Products sales</h2>
                  <span><?php echo  $total_sales?></span>
                </div>
                <div class="chart-svg">
                  <svg viewBox="0 0 36 36" class="circular-chart pink">
            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <path class="circle" stroke-dasharray="<?php echo $count;?>, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>        
            <text x="18" y="20.35" class="percentage"><?php echo $count.'%';?></text>
          </svg>
                </div>
              </div>
            </div>
            <div class="chart-container-wrapper">
              <div class="chart-container">
                <div class="chart-info-wrapper">
                  <h2>Total Sales Amount</h2>
                  <span>₹<?php echo $totalSalesAmount ;?></span>
                </div>
                <div class="chart-svg">
                  <svg viewBox="0 0 36 36" class="circular-chart blue">
            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <path class="circle" stroke-dasharray="<?php echo $sales_percentage;?>, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <text x="18" y="20.35" class="percentage"><?php echo $sales_percentage;?>%</text>
          </svg>
                </div>
              </div>
            </div> 
            <div class="chart-container-wrapper">
              <div class="chart-container">
                <div class="chart-info-wrapper">
                  <h2>Pending Orders</h2>
                  <span><?php echo $pending_count;?></span>
                </div>
                 <div class="chart-svg">
                  <svg viewBox="0 0 36 36" class="circular-chart orange">
            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <path class="circle" stroke-dasharray="<?php echo $pending_percentage;?>, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <text x="18" y="20.35" class="percentage"><?php echo $pending_percentage.'%';?></text>
          </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="chart-row two" style='overflow-y: auto;'>
            <div class="chart-container-wrapper big" style='overflow-y: auto;'>
              <div class="chart-container" style='overflow-y: auto;'>
                <div class="chart-container-header" style='overflow-y: auto;'>
                  <h2>Pending Orders</h2>
                  <a href="orders.php"><span>Manage all orders</span></a>
                </div>
                
                <div class="products-area-wrapper tableView">

            <div class="products-header">
              
              <div class="product-cell stock">Product id</div>
              <div class="product-cell image">Total products</div>
              <div class="product-cell category">Invoice</div>
              <div class="product-cell status-cell">Address</div>
              <div class="product-cell sales">Amount</div>
              <div class="product-cell stock">Status</div>
              <div class="product-cell price">Ship</div>
              
              
            </div>
            
              <?php 
                 home_order_data();
              ?>
            
          </div>
              </div>
            </div>
            <div class="chart-container-wrapper small">
              <div class="chart-container">
                <div class="chart-container-header">
                  <h2>Orders</h2>
                  <a href="orders.php"><span >All Orders</span></a>
                </div>
                <div class="acquisitions-bar">
                 <span class="bar-progress rejected" style="width:<?php echo $delivered_percentage.'%';?>;"></span>
                  <span class="bar-progress on-hold" style="width:<?php echo $out_for_delivery_percentage.'%';?>;"></span>
                  <span class="bar-progress shortlisted" style="width:<?php echo $pending_percentage.'%';?>;"></span>
                  <span class="bar-progress applications" style="width:<?php echo $shipped_percentage.'%';?>;"></span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color applications"></span>
                  <span class="progress-type">Shipped</span>
                  <span class="progress-amount"><?php echo $shipped_percentage.'%';?></span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color shortlisted"></span>
                  <span class="progress-type">Pending</span>
                  <span class="progress-amount"><?php echo $pending_percentage.'%';?></span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color on-hold"></span>
                  <span class="progress-type">Out for delivery</span>
                  <span class="progress-amount"><?php echo $out_for_delivery_percentage.'%';?></span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color rejected"></span>
                  <span class="progress-type">Delivered</span>
                  <span class="progress-amount"><?php echo $delivered_percentage.'%';?></span>
                </div>
              </div>
              <div class="chart-container applicants">
                <div class="chart-container-header">
                  <h2>Inbox</h2>
                  <a href="inbox.php"><span>see all</span></a>
                </div>
               
            <?php
                home_contactus();
            ?>
          
                
              </div>
              <div class="chart-container applicants">
                <div class="chart-container-header">
                  <h2>Customers</h2>
                  <a href="customer.php"><span>see all</span></a>
                </div>
                <?php
                customers_home();
                ?>
                
              </div>
            </div>
          </div>
        </div>
            
            
            
           
        </div>
    </div>
    <script>
      var modeSwitch = document.querySelector('.mode-switch');
  modeSwitch.addEventListener('click', function () {                     
    document.documentElement.classList.toggle('light');
    modeSwitch.classList.toggle('active');
  });
      const insertcategories=document.getElementById('insertcategories');
      const insertbrand=document.getElementById('insertbrands');
      function showinsertcharacter() {
  if (insertbrand.style.display = "block" && insertcategories.style.display = "block") {
    insertbrand.style.display = "none";
    insertcategories.style.display = "none";
    if (insertcharacter.style.display ="none") {
      insertcharacter.style.display = "block";
    }
  }
}

      function showinsertcategories(){
      if(insertbrand.style.display="block"  && insertcharacter.style.display="block"){
        insertbrand.style.display="none";
        insertcharacter.style.display="none"
        if(insertcategories.style.display="none"){
          insertcategories.style.display="block";
        }
      }
    }
    function showbrand(){
      if(insertcategories.style.display="block" && insertcharacter.style.display="block"){
        insertcategories.style.display="none";
        insertcharacter.style.display="none"
        if(insertbrand.style.display="none"){
          insertbrand.style.display="block";
        }
      }
    }
    </script>
    <script src="script.js"></script>
</body>
</html>