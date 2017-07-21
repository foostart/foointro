$(document).ready(function(){
    var count = 2;
    var index = $('input[type=text][name=index]').val();

    $(".button-add-perm").click(function () {
        // alert('add');
        var input = $('input[type=text][name=attribute]').val();
        // alert($('input[type=text][name=attribute]').length);
        // var index = $('input[type=text][name=index]').val();
        // alert(index);
        // var i = 2;

        // while($('input[type=text][name=attribute'+ i +']').val() != ''){
        //     count++;
        //     i++;
        // }
        // alert(count);
        // alert($('input[type=text][name=attribute'+ 5 +']').val());
        // var newTextBoxDiv = $(document.createElement('div')).attr({
        //         class: 'input-group',
        //         id: 'attr' + count
        //     });

        // newTextBoxDiv.html('<span class="input-group-addon form-button button-del-perm" onclick="('+ count +');">' + 
        //                         '<span class="glyphicon glyphicon-plus-sign add-input"></span>'+
        //                     '</span>' +
        //     '<input type="text" name="attribute" class="form-control"' +
        //     'placeholder="text placeholder" value="'+ input + '">');

        // newTextBoxDiv.appendTo(".text");

        // count++;

        var div = document.createElement('div');
        div.className = 'input-group';
        div.id = 'attr' + index;
        div.innerHTML = '<span class="input-group-addon form-button button-del-perm"  onclick="removeText(this); return false;">' + 
                                '<span class="glyphicon glyphicon-plus-sign add-input"></span>'+
                            '</span>' +
            '<input type="text" name="attribute'+ index +'" class="form-control"' +
            'placeholder="undefined" value="'+ input + '">';
        document.getElementById('text').appendChild(div);
        // document.appendChild(div);
        $('input[type=text][name=attribute]').val('');
        $('input[type=text][name=attribute]').focus();

        index++;
    });

    $(".button-del-perm").click(function () {
        // alert('delete');
        var key = $(this).closest('div').attr('id');
        // alert(key);
        $('#' + key).remove();
    });

    function removeChild(input){
        alert('delete');
        // document.getElementById('text').removeChild( input.parentNode );
    }

    function removeText(id){
        alert('delete');
        alert(id);
        var elem = document.getElementById(id);
        elem.parentNode.removeChild(elem);
        return false;
    }

    function addElement(parentId, elementTag, elementId, html) {
        // Adds an element to the document
        var p = document.getElementById(parentId);
        var newElement = document.createElement(elementTag);
        newElement.setAttribute('id', elementId);
        newElement.innerHTML = html;
        p.appendChild(newElement);
    }

    function removeElement(elementId) {
        // Removes an element from the document
        var element = document.getElementById(elementId);
        element.parentNode.removeChild(element);
    }
});