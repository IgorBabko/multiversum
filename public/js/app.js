(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

(function () {
  $(function () {
    var _changeQuotes, controller, quotesArray;
    $('.header__heading').fadeIn(1000, function () {
      return $('.header__arrow').fadeIn(500);
    });
    if ($(".header__iframe iframe").length > 0) {
      $(".header__iframe iframe")[0].src += "&autoplay=1";
    }
    quotesArray = ["Все стремится друг к другу", "Мир не терпит пустоты", "Все стремится к покою"];
    $(window).keyup(function (e) {
      if (e.keyCode === 27 && window.innerWidth < 768) {
        return $('.navbar-toggle').trigger('click');
      }
    });
    _changeQuotes = function changeQuotes(counter) {
      var quote;
      quote = quotesArray[counter];
      return $('.header__quote').html(quote).fadeIn(1000, function () {
        return setTimeout(function () {
          delete quotesArray[counter];
          quotesArray.push(quote);
          return $('.header__quote').fadeOut(1000, function () {
            return _changeQuotes(counter + 1);
          });
        }, 5000);
      });
    };
    _changeQuotes(0);
    controller = new ScrollMagic.Controller();
    $('.resource').each(function (i, resource) {
      return new ScrollMagic.Scene({
        triggerElement: resource,
        triggerHook: '0.9'
      }).on('enter', function () {
        return $(resource).addClass('visible');
      }).addTo(controller);
    });
    $('input[type!="hidden"]').first().focus().select();
    $('.search form').submit(function (e) {
      e.preventDefault();
      if (!/^\s*$/.test($('.search__input').val())) {
        return location.href = $(this).attr('action').replace('?', $('.search__input').val());
      }
    });
    $('.Subscription__form').submit(function (e) {
      var subscriptionRequest;
      e.preventDefault();
      subscriptionRequest = $.ajax({
        url: "/subscribe",
        method: "POST",
        data: $(this).serialize()
      });
      subscriptionRequest.done(function (msg) {
        $('body').append('<div id="ohsnap"></div>');
        ohSnap(msg, {
          color: 'green',
          icon: 'icon-alert'
        });
        return console.log('success');
      });
      return subscriptionRequest.fail(function (jqXHR, textStatus) {
        var error, ref;
        $('#ohsnap').remove();
        error = (ref = JSON.parse(jqXHR.responseText).email[0]) != null ? ref : 'Ошибка на сервере';
        $('body').append('<div id="ohsnap"></div>');
        return ohSnap(error, {
          color: 'red',
          icon: 'icon-alert'
        });
      });
    });
  });
}).call(undefined);



},{}]},{},[1]);

//# sourceMappingURL=app.js.map
