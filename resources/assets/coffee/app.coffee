$ ->
    $('.header').parallax imageSrc: '/img/background3.jpg'

    $('.header__heading').fadeIn 1000, ->
        $('.header__arrow').fadeIn 500

    $('.navbar .dropdown').hover(
        -> $(this).find('.dropdown-menu').first().stop(true, true).delay(1).slideDown(100)
        -> $(this).find('.dropdown-menu').first().stop(true, true).delay(1).slideUp(100)
    )

    quotesArray = [
        "Все стремится друг к другу"
        "Мир не терпит пустоты"
        "Все стремится к покою"
    ]

    changeQuotes = (counter) ->
        quote = quotesArray[counter]
        $('.header__quote').html(quote).fadeIn 1000, ->
            setTimeout ->
                delete quotesArray[counter]
                quotesArray.push quote
                $('.header__quote').fadeOut 1000, ->
                    changeQuotes(counter + 1)
            , 5000

    changeQuotes 0

    controller = new ScrollMagic.Controller()

    $('.resource').each(
        (i, resource) ->
            new ScrollMagic.Scene(
                triggerElement: resource
                triggerHook: '0.9'
            ).on('enter', ->
                $(resource).addClass('visible')
            ).addTo(controller)
    )

    # focus on first input field
    $('input[type!="hidden"]').first().focus();

    # search
    $('.search form').submit (e) ->
        e.preventDefault()
        if /^\s*$/.test $('.search__input').val()
            location.href = location.href.match(/\/[^\/]+(\/[^\/]+)/)[1]
        else
            location.href = $(this).attr('action').replace('?', $('.search__input').val())

    return
