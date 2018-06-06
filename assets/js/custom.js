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
        center: {
            lat: -24.315628907175455,
            lng: -47.008356049999975
        }
    });

    var image = 'assets/img/mark_m.png';
    var beachMarker = new google.maps.Marker({
        position: {
            lat: -24.315628907175455,
            lng: -47.008326049999975
        },
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




var app = angular.module('macanApp', ['ngAnimate']);
app.config([
    '$interpolateProvider',
    function ($interpolateProvider) {
        return $interpolateProvider.startSymbol('{(').endSymbol(')}');
    }
]);


app.controller("macanController", function ($scope, $http) {
    $http.get('assets/data/catalog.json').then(function (data, status) {
        var vm = $scope;
        vm.categories = data.data.categories;
        vm.tools = data.data.tools;
        /*
            Função responável por gerar mais posts ao clicar em Load More
        */
        vm.quantity = 6;
        vm.loadMore = function () {
            var postsSize = vm.tools.length;
            var increamented = vm.quantity + 3;
            var btLoadMore = document.querySelector('.loadMore');
            var elementCount = document.querySelectorAll('.col-card').length + 3;

            if (increamented > postsSize || elementCount != increamented) {
                vm.quantity = postsSize;
                btLoadMore.setAttribute("class", "loadMore inactive");
            } else {
                vm.quantity = increamented;
            }
        };

        vm.openDlg = function (tool) {
            console.log(tool);
      
            var modal = angular.element("#myModal");
            if (modal) {

                document.querySelector('.modal-card-img').setAttribute('style', 'background-image: url("/assets/img/perfis/'+ tool.cod +'.jpg")');
                modal.scope().tool_code = tool.cod;
                modal.scope().tool_desc = tool.desc;
                modal.scope().tool_peso_metro = tool.peso_metro;
                modal.scope().tool_medida_a = tool.medida_a;
                modal.scope().tool_medida_b = tool.medida_b;
                modal.scope().tool_medida_e = tool.medida_e;

                modal.modal("show");
            }
        };


    });
});



/*
    Função responsável pela busca de posts
*/
app.filter('searchFor', function () {
    return function (arr, searchString) {
        if (!searchString) {
            return arr;
        }
        var result = [];
        var btLoadMore = document.querySelector('.loadMore');

        searchString = searchString.toLowerCase();
        angular.forEach(arr, function (item) {
            if (item.desc.toLowerCase().indexOf(searchString) !== -1 ||
                item.cod.toLowerCase().indexOf(searchString) !== -1) {
                result.push(item);
            }
            if (result.length < 6 && result.length > 0) {
                btLoadMore.setAttribute("class", "loadMore inactive");
            } else if (result.length == 0) {
                btLoadMore.setAttribute("class", "loadMore zeroLenght");
            } else {
                btLoadMore.setAttribute("class", "loadMore");
            }
        });
        return result;
    };
});