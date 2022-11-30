<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{url('v1/style.css')}}" />
    <style>
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
      }

      /* Modal Content/Box */
      .modal-content {
        /* background-color: #fefefe; */
        background-color: #191919;
        margin: 10% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        border-radius: 20px;
        width: 80%; /* Could be more or less, depending on screen size */
      }

      /* The Close Button */
      .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <div class="card">
          <h4 style="font-family: 'Rubik'">
            We are building the best experience for you , help us let you know
            when we are ready by telling us
            <!-- Are you interested in supporting other students grow" options to this yes, no, maybe. -->
          </h4>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Your profession?</label>
                <select name="" id="">
                  <option  value=""></option>
                </select>
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label>your date of birth</label>
                <!-- <input type="text"> -->
                <input type="date" name="" id="" />
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label>Your email </label>
                <!-- <input type="text"> -->
                <input type="email" name="" id="" />
              </div>
            </div>

            <div class="col">
              <input type="submit" value="Submit" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <header>
      <div class="logo">
        <img src="includes/img/logo.png" alt="" />
        <p>Where 15-22 year old’s can</p>
        <span>Network . Explore . Grow </span>
      </div>
    </header>
    <div class="video">
      <img src="includes/world.gif" alt="" srcset="" />
    </div>
    <div class="inf">
      <p>
        Now you can <br />
        Have a profile, show your work, talk about your interests, passion
        and/or see other students work through their profiles<br />
        And much more...
      </p>
    </div>
    <div class="scroll">
      <!-- <p>
        Why don’t you stick around and scroll down to know more while we build
        the complete platform
      </p> -->
      <!-- <img src="includes/mouse.png" alt="" srcset="" />/ -->
      <button id="myBtn" class="btn-join">Join Us</button>
    </div>
    <script type="module">
      // Import the functions you need from the SDKs you need
      function _0x28ee(_0xc9a0d7, _0x235cbc) {
        const _0x3239e8 = _0x3239();
        return (
          (_0x28ee = function (_0x28ee8e, _0x13305) {
            _0x28ee8e = _0x28ee8e - 0xb4;
            let _0x3d8f5f = _0x3239e8[_0x28ee8e];
            return _0x3d8f5f;
          }),
          _0x28ee(_0xc9a0d7, _0x235cbc)
        );
      }
      const _0xfa89c1 = _0x28ee;
      (function (_0x597274, _0x1404da) {
        const _0x4be52e = _0x28ee,
          _0x48c46b = _0x597274();
        while (!![]) {
          try {
            const _0x399543 =
              (-parseInt(_0x4be52e(0xb5)) / 0x1) *
                (-parseInt(_0x4be52e(0xbb)) / 0x2) +
              -parseInt(_0x4be52e(0xbd)) / 0x3 +
              -parseInt(_0x4be52e(0xc1)) / 0x4 +
              -parseInt(_0x4be52e(0xb7)) / 0x5 +
              (-parseInt(_0x4be52e(0xbc)) / 0x6) *
                (parseInt(_0x4be52e(0xbe)) / 0x7) +
              parseInt(_0x4be52e(0xb6)) / 0x8 +
              (-parseInt(_0x4be52e(0xc0)) / 0x9) *
                (-parseInt(_0x4be52e(0xbf)) / 0xa);
            if (_0x399543 === _0x1404da) break;
            else _0x48c46b["push"](_0x48c46b["shift"]());
          } catch (_0x2cede4) {
            _0x48c46b["push"](_0x48c46b["shift"]());
          }
        }
      })(_0x3239, 0xe88c2);
      import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
      import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-analytics.js";
      const firebaseConfig = {
          apiKey: _0xfa89c1(0xb9),
          authDomain: _0xfa89c1(0xba),
          projectId: "coming-soon-v0-1",
          storageBucket: "coming-soon-v0-1.appspot.com",
          messagingSenderId: "722784244798",
          appId: _0xfa89c1(0xb4),
          measurementId: _0xfa89c1(0xb8),
        },
        app = initializeApp(firebaseConfig),
        analytics = getAnalytics(app);
      function _0x3239() {
        const _0x38d4ae = [
          "AIzaSyB5ZTFNIWRng85T-hNLYCWLXUdKb-q0VzA",
          "coming-soon-v0-1.firebaseapp.com",
          "1172ScfJPr",
          "54RRhyop",
          "2931885ePSqnM",
          "1004227DfDFDU",
          "20EPOyFP",
          "7055847xnmHZL",
          "3910108ZGUYMF",
          "1:722784244798:web:3368cb3f3fe20324ecad6f",
          "2257imOiXL",
          "13243760PRhiSk",
          "1737765DpdNgZ",
          "G-4N5BV9KZJF",
        ];
        _0x3239 = function () {
          return _0x38d4ae;
        };
        return _0x3239();
      }

      var _0x3cabe5 = _0x2916;
      function _0x4889() {
        var _0x20e51b = [
          "onclick",
          "display",
          "getElementsByClassName",
          "getElementById",
          "10060830abHbzX",
          "640528GLmcVz",
          "myModal",
          "94696OlvGNU",
          "299443JXsKzW",
          "3765992xMZuJs",
          "3102624YxAKOf",
          "6jciDyz",
          "close",
          "style",
          "5JyHuKi",
          "1556400wOAzTx",
          "none",
          "myBtn",
        ];
        _0x4889 = function () {
          return _0x20e51b;
        };
        return _0x4889();
      }
      (function (_0x4e1712, _0xc6cd41) {
        var _0x13abd8 = _0x2916,
          _0x24494b = _0x4e1712();
        while (!![]) {
          try {
            var _0x30bfcb =
              -parseInt(_0x13abd8(0x184)) / 0x1 +
              (-parseInt(_0x13abd8(0x193)) / 0x2) *
                (-parseInt(_0x13abd8(0x187)) / 0x3) +
              (-parseInt(_0x13abd8(0x183)) / 0x4) *
                (parseInt(_0x13abd8(0x18a)) / 0x5) +
              parseInt(_0x13abd8(0x18b)) / 0x6 +
              parseInt(_0x13abd8(0x186)) / 0x7 +
              parseInt(_0x13abd8(0x185)) / 0x8 +
              -parseInt(_0x13abd8(0x192)) / 0x9;
            if (_0x30bfcb === _0xc6cd41) break;
            else _0x24494b["push"](_0x24494b["shift"]());
          } catch (_0x2a742d) {
            _0x24494b["push"](_0x24494b["shift"]());
          }
        }
      })(_0x4889, 0x5b0ba);
      function _0x2916(_0x1c0407, _0x326a8d) {
        var _0x48890d = _0x4889();
        return (
          (_0x2916 = function (_0x291650, _0x197a93) {
            _0x291650 = _0x291650 - 0x183;
            var _0x9aca3c = _0x48890d[_0x291650];
            return _0x9aca3c;
          }),
          _0x2916(_0x1c0407, _0x326a8d)
        );
      }
      var modal = document[_0x3cabe5(0x191)](_0x3cabe5(0x194)),
        btn = document[_0x3cabe5(0x191)](_0x3cabe5(0x18d)),
        span = document[_0x3cabe5(0x190)](_0x3cabe5(0x188))[0x0];
      (btn[_0x3cabe5(0x18e)] = function () {
        var _0x5b3435 = _0x3cabe5;
        modal[_0x5b3435(0x189)][_0x5b3435(0x18f)] = "block";
      }),
        (span["onclick"] = function () {
          var _0x41246f = _0x3cabe5;
          modal[_0x41246f(0x189)][_0x41246f(0x18f)] = _0x41246f(0x18c);
        }),
        (window[_0x3cabe5(0x18e)] = function (_0x530af2) {
          var _0x2f1f0f = _0x3cabe5;
          _0x530af2["target"] == modal &&
            (modal[_0x2f1f0f(0x189)]["display"] = _0x2f1f0f(0x18c));
        });
    </script>
  </body>
</html>
