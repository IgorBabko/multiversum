(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

(function () {
  $(function () {
    var _changeQuotes, controller, quotesArray;
    $('.header').parallax({
      imageSrc: '/img/background3.jpg'
    });
    $('.header__heading').fadeIn(1000, function () {
      return $('.header__arrow').fadeIn(500);
    });
    $('.navbar .dropdown').hover(function () {
      return $(this).find('.dropdown-menu').first().stop(true, true).delay(1).slideDown(100);
    }, function () {
      return $(this).find('.dropdown-menu').first().stop(true, true).delay(1).slideUp(100);
    });
    quotesArray = ["Все стремится друг к другу", "Мир не терпит пустоты", "Все стремится к покою"];
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
    $('.search').submit(function (e) {
      e.preventDefault();
      return location.href = $(this).attr('action').replace('?', $('.search__input').val() || ' ');
    });
  });
}).call(undefined);



},{}]},{},[1]);

//# sourceMappingURL=app.js.map
