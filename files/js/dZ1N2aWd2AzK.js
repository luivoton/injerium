ymaps.ready(init);

function init() {

    // Создание экземпляра карты.
    var myMap = new ymaps.Map('coursemap', {
            center: [55.7537, 37.6198],
            zoom: 11
        },
		{suppressMapOpenBlock: true});
    
	
	for (var i = 0, l = groups.length; i < l; i++) {
        createMenuGroup(groups[i]);
    }    

function createMenuGroup (group) {
        // Коллекция для геообъектов группы.
        var collection = new ymaps.GeoObjectCollection(null, { preset: group.style });
        // Добавляем коллекцию на карту.
        myMap.geoObjects.add(collection);

        for (var j = 0, m = group.items.length; j < m; j++) {
            createMark(group.items[j],collection);
        }
    }


    

    function createMark (item,collection) {
        // Создаем метку на карту
            placemark = new ymaps.Placemark(item.center, { 
				hintContent: '<b>' + item.title + '</b><br>' + item.name, 
				balloonContentHeader: item.title,
				balloonContentBody: item.name
				}, {
            iconLayout: 'default#image',
            iconImageHref: '/img/' + item.pin,
            iconImageSize: [42, 26],
            iconImageOffset: [-21, -26]					
				});
		// Добавляем метку в коллекцию.
			collection.add(placemark);

    }
	myMap.setBounds(myMap.geoObjects.getBounds(), {checkZoomRange:true}).then(function(){ if(myMap.getZoom() > 16) myMap.setZoom(16);});
	myMap.behaviors.disable('scrollZoom');
}