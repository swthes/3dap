$(document).ready(function () {

    function populateImages(jsonObj) {
        for (let i = 0; i < 3; i++) {
            $('#image' + (i + 1)).attr('src', jsonObj.images[i].imageURL);
            $('#title' + (i + 1)).html('<h2>' + jsonObj.images[i].title + '</h2>');
            $('#content' + (i + 1)).html('<h3>' + jsonObj.images[i].content + '</h3>');
        }
    }

    function populatePageTextData(jsonObj) {
        const ids = ['fanta','diet', 'pepper', 'coke', 'sprite'];

        ids.forEach((id, index) => {
            $('#x3dModelTitle_' + id).html('<h2>' + jsonObj.pageTextData[index].x3dModelTitle + '</h2>');
            $('#x3dCreationMethod_' + id).html('<p>' + jsonObj.pageTextData[index].x3dCreationMethod + '</p>');
            $('#title_' + id).html('<h2>' + jsonObj.pageTextData[index].title + '</h2>');
            $('#subTitle_' + id).html('<h3>' + jsonObj.pageTextData[index].subTitle + '</h3>');
            $('#description_' + id).html('<p>' + jsonObj.pageTextData[index].description + '</p>');
        });

       
    }

    $.getJSON("ReaddbImages")
        .done(populateImages)
        .fail(function() {
            console.error('Error fetching images');
        });

    $.getJSON('../application/model/data.json')
        .done(populatePageTextData)
        .fail(function() {
            console.error('Error fetching page text data');
        });

});
