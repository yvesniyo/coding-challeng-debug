# Debug Challenge

We are using the following database:

![DB Diagram](diagram.png)
<!--
https://dbdiagram.io/

Table users {
  id int [pk,increment]
  username varchar
  password varchar
}
Table questions {
  id int [pk, increment] // auto-increment
  owner_id int
  topic varchar
  content varchar
}
Ref: questions.owner_id > users.id

-->

The two PHP scripts contain bugs. Can you find them?
