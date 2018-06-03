//Mudar o icone de menu para X e viceversa
$('.spinner-spin2').click(function () {
    $('.nav-mobile').toggleClass('active');
});

//Torna o cabeçalho fixo dependendo da posição da página
$(window).scroll(function () {
    var sticky = $('header'),
        scroll = $(window).scrollTop();

    if (scroll >= 65) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
});

//Efeito para trocar a imaem de fundo da home dinamicamente
$("#carouselExampleIndicators").on('slide.bs.carousel', function () {
    var img = $("#carouselExampleIndicators .carousel-inner .active img").attr('src');
    $('.banner-home-back').css('background-image', 'url(' + img + ')');
});

//Google Maps
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: { lat: -24.315628907175455, lng: -47.008356049999975 }
    });

    var image = 'assets/img/mark_m.png';
    var beachMarker = new google.maps.Marker({
        position: { lat: -24.315628907175455, lng: -47.008326049999975 },
        map: map,
        icon: image
    });
}

//Função para ir ate parte da página
function goTo(direction) {
    $('html, body').animate({
        scrollTop: $(direction).offset().top
    }, 800);
};

$(document).ready(function () {
    $(".partner .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 3
            },
            1000: {
                items: 10
            }
        }
    });
});




/*
  ng-app padrão do projeto  
*/
var simpleDash = angular.module("simpleDashboard", ['ngAnimate']);

/*
  ng-controller padrão do projeto  
*/
simpleDash.controller("simpleDashboardCtrl", function ($scope, $http) {
    $http.get('assets/data/data.json').then(function (data, status) {
        $scope.posts = data.data.links;

        /*
            Função responável por gerar mais posts ao clicar em Load More
        */
        $scope.quantity = 5;
        $scope.loadMore = function () {
            var postsSize = data.data.links.length;
            var increamented = $scope.quantity + 3;
            var btLoadMore = document.querySelector('.loadMore');

            if (increamented > postsSize) {
                $scope.quantity = postsSize;
                btLoadMore.setAttribute("class", "loadMore inactive");
            } else {
                $scope.quantity = increamented;
            }
        };

    });
});


/*
    Função responsável pela busca de posts
*/
simpleDash.filter('searchFor', function () {
    return function (arr, searchString) {
        if (!searchString) {
            return arr;
        }
        var result = [];
        var btLoadMore = document.querySelector('.loadMore');
        searchString = searchString.toLowerCase();
        angular.forEach(arr, function (item) {
            if (item.meta.author.toLowerCase().indexOf(searchString) !== -1 || item.meta.title.toLowerCase().indexOf(searchString) !== -1) {
                result.push(item);
            }
            if(result.length < 5 && result.length > 0){
                btLoadMore.setAttribute("class", "loadMore inactive");
            } else if(result.length == 0) {
                btLoadMore.setAttribute("class", "loadMore zeroLenght");
            } else {
                btLoadMore.setAttribute("class", "loadMore");
            }
        });
        return result;
    };
});



var app = angular.module('macanApp', ['ngAnimate']);
app.config([
  '$interpolateProvider', function($interpolateProvider) {
    return $interpolateProvider.startSymbol('{(').endSymbol(')}');
  }
]);


app.controller("macanController", function ($scope, $http) {
    $http.get('assets/data/catalog.json').then(function (data, status) {
        
        $scope.perfis = data.data.tools;


        console.log($scope.perfis);
        /*
            Função responável por gerar mais posts ao clicar em Load More
        */
        $scope.quantity = 5;
        $scope.loadMore = function () {
            var postsSize = data.data.links.length;
            var increamented = $scope.quantity + 3;
            var btLoadMore = document.querySelector('.loadMore');

            if (increamented > postsSize) {
                $scope.quantity = postsSize;
                btLoadMore.setAttribute("class", "loadMore inactive");
            } else {
                $scope.quantity = increamented;
            }
        };

    });
});