## Library Management System REST API

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

In this API, we are creating options to manage users, manage books, add new orders and also other general library management features.

### API Documentation

#### Book

##### Book Object : 
```javascript
{
  "title":"Around the world in 99 days",
  "author" :"chanu1993",
  "isbn" : "QWERTY1234567"
}
```

* Add new book[POST] : http://localhost:8080/api/v1/book
* View all books[GET] : http://localhost:8080/api/v1/book
* Get specific book[GET] : http://localhost:8080/api/v1/book/1
* Update book[PUT] : http://localhost:8080/api/v1/book/1
* Delete book[DELETE] : http://localhost:8080/api/v1/book/1

#### Order

##### Order Object : 
```javascript
{
"book_id" : 1,
"user_id" : "USER006",
"order_type":"custom_order",
"order_date":"2016/04/28"
}
```

* Add new order[POST] : http://localhost:8080/api/v1/order
* View all orders[GET] : http://localhost:8080/api/v1/order
* Get specific order[GET] : http://localhost:8080/api/v1/order/1
* Update order[PUT] : http://localhost:8080/api/v1/order/1
* Delete order[DELETE] : http://localhost:8080/api/v1/order/1

### How to run

##### Navigate to public folder and run the command : php -S localhost:8000

### License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
