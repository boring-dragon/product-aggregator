# Product aggregation
Product Aggregator written in PHP

I am still trying to figure things out 😁

### Idea

The idea of this project is to scrape data from different online shops and aggregate them into a dashboard and show the shop where that product is cheapest at.

Read about it at [Aggregate Cheapest Products](https://jinas.me/aggregate-cheapest-products-from-online-shops-in-maldives)

### Resources

[(PDF) Web scraping for food price research](https://www.researchgate.net/publication/337186825_Web_scraping_for_food_price_research)

### Sites

- [Dhimart - Your Online Mart](https://dhimart.mv/)

- [Eat.mv](https://www.eat.mv/)

- [Seagull Foods](https://foods.seagullmaldives.com/)


### Steps

- Search through the site for a given product name and extract the information of the first result
  
- Store the scraped information in SQlite database
  
- Scrape with cron jobs and refresh the existing database with new products.
  

### Todo

- [x] List out the online shops
  
- [x] Write a abstract scraper for aggregation (This scraper should work as a Driver based scraper where the driver will be specific for everyshop but the underlining scraper will be the same for every site)

- [x] Product Model
  
- [x] Store the data inside the database

- [x] Lookup table for products
  
- [x] Refresh all the products inside the database in a cron job.
