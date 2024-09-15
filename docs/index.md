# Random Norris Details

The goal of the Random Norris is to create a simple Symfony app, which merge the results of two API based on some rules.

- The app is a "single page" application with a form that takes three parameters: "userId1", "userId2", "method".
- User ids must be integers and they must not be the same
- Method either "mod", or "fib". Default "fib".

The page to be implemented lists 10-10 entries of the "jsonplaceholder" users belonging to the "userId1" and "userId2" parameters, supplemented by some list elements from the ICNDB, with the following rules (example list below):

- Entries belonging to the two "jsonplaceholder" users should appear in a combined list in reverse order by age.
- in the case of "method" = "mod", every third list element should be the random element returned by the ICNDB API.
- In the case of "method" = "fib", every element whose sequence number in the result list is a Fibonacci number and the number > 2 should be a random element returned by the ICNDB API.

APIs:

- JSONPlaceholder: https://jsonplaceholder.typicode.com/
- ICNDB: https://api.chucknorris.io/

## Expected results

{app_url}/1/2/mod

| number | source            | message id | message                                                                                                                                                                                                                  |
| ------ | ----------------- | ---------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| 1.     | jsonplaceholder/1 | 10         | quo et expedita modi cum officia vel magni\ndoloribus qui repudiandae\nvero nisi sit\nquos veniam quod sed accusamus veritatis error                                                                                     |
| 2.     | jsonplaceholder/2 | 10         | qui consequuntur ducimus possimus quisquam amet similique\nsuscipit porro ipsam amet\neos veritatis officiis exercitationem vel fugit aut necessitatibus totam\nomnis rerum consequatur expedita quidem cumque explicabo |
| 3.     | icndb             |            | This is a random message from icndb                                                                                                                                                                                      |
| 4.     | jsonplaceholder/1 | 9          | consectetur animi nesciunt iure dolore\nenim quia ad\nveniam autem ut quam aut nobis\net est aut quod aut provident voluptas autem voluptas                                                                              |
| 5.     | jsonplaceholder/2 | 9          | illum quis cupiditate provident sit magnam\nea sed aut omnis\nveniam maiores ullam consequatur atque\nadipisci quo iste expedita sit quos voluptas                                                                       |
| 6.     | icndb             |            | This is a another random message from icndb                                                                                                                                                                              |

## Requests

Relevant requests are documented in the [requests.http](./request.http) file.
