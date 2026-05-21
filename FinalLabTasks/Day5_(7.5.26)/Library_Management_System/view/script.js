$(document).ready(function(){

    loadBooks();

    function loadBooks()
    {
        $.ajax({
            url: "../ajax/handler.php",
            type: "POST",
            data: {action: "fetch"},

            success: function(data)
            {
                $("#bookData").html(data);
            }
        });
    }

    $("#addBtn").click(function(){

        let title = $("#title").val();
        let author = $("#author").val();
        let category = $("#category").val();
        let status = $("#status").val();

        $.ajax({
            url: "../ajax/handler.php",
            type: "POST",

            data: {
                action: "add",
                title: title,
                author: author,
                category: category,
                status: status
            },

            success: function()
            {
                loadBooks();

                $("#title").val('');
                $("#author").val('');
                $("#category").val('');
            }
        });
    });

    window.deleteBook = function(id)
    {
        $.ajax({
            url: "../ajax/handler.php",
            type: "POST",

            data: {
                action: "delete",
                id: id
            },

            success: function()
            {
                loadBooks();
            }
        });
    }

    window.editBook = function(id)
    {
        $.ajax({
            url: "../ajax/handler.php",
            type: "POST",

            data: {
                action: "get",
                id: id
            },

            success: function(data)
            {
                let book = JSON.parse(data);

                $("#book_id").val(book.id);
                $("#title").val(book.title);
                $("#author").val(book.author);
                $("#category").val(book.category);
                $("#status").val(book.status);

                $("#addBtn").hide();
                $("#updateBtn").show();
            }
        });
    }

    $("#updateBtn").click(function(){

        $.ajax({
            url: "../ajax/handler.php",
            type: "POST",

            data: {
                action: "update",
                id: $("#book_id").val(),
                title: $("#title").val(),
                author: $("#author").val(),
                category: $("#category").val(),
                status: $("#status").val()
            },

            success: function()
            {
                loadBooks();

                $("#book_id").val('');
                $("#title").val('');
                $("#author").val('');
                $("#category").val('');

                $("#addBtn").show();
                $("#updateBtn").hide();
            }
        });
    });

});