# Groccery Product aggregation
Groccery Product Aggregator written in PHP

This is an ongoing idea. Yet to be made a reality :D

### Idea

The idea of this project is to scrape data from different online shops and aggregate them into a dashboard and show the shop where that product is cheapest at.

### Resources

[(PDF) Web scraping for food price research](https://www.researchgate.net/publication/337186825_Web_scraping_for_food_price_research)

### Sites

[Dhimart - Your Online Mart](https://dhimart.mv/)

[VB Brothers - Providing genuine, quality, everyday products at an affordable price](https://www.vbbrothers.com.mv/)

[Eat.mv](https://www.eat.mv/)

[Seagull Foods](https://foods.seagullmaldives.com/)

[Good food maldives](https://www.goodfoodmaldives.com/)

[ihsaanfihaara](https://delivery.ihsaanfihaara.com/#/)

https://sto.mv/Estore/Shop?site=sm04

### Steps

- Search through the site for a given product name and extract the information of the first result
  
- Scraper should be able to identify when a product is not found when its searched
  
- Store the scraped information in SQlite database
  
- Scrape with cron jobs and refresh the existing database with new products.
  

### Todo

- [x] List out the online shops
  
- [ ] Write a abstract scraper for aggregation (This scraper should work as a Driver based scraper where the driver will be specific for everyshop but the underlining scraper will be the same for every site)
  
- [ ] Store the data inside the database
  
- [ ] Wire up the conditional Logic
  
- [ ] Refresh all the products inside the database in a cron job.
