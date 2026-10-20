# UIU Web Final 262

Three independent solutions for the web final assignment. Open each question separately; there is no shared application or build step.

| Question | Files | What it does |
| --- | --- | --- |
| 1 | `ques1/q1.html`, `ques1/q1.js` | Adds items to a cart and calculates the total in the browser. |
| 2 | `ques2/q2.php` | Calculates a hotel room bill from a submitted form. |
| 3 | `ques3/q3.php`, `ques3/match_performance.sql` | Runs cricket performance queries against a MariaDB/MySQL table. |

## Requirements

- A web browser for Question 1.
- PHP with the `mysqli` extension for Questions 2 and 3.
- MariaDB or MySQL for Question 3. XAMPP provides the required PHP and database services.

## Run the solutions

If using XAMPP, place this folder inside `htdocs` and start Apache. Start MySQL as well for Question 3.

1. **Question 1:** Open `ques1/q1.html` directly in a browser, or visit `http://localhost/0112420437_suchak/ques1/q1.html`.
2. **Question 2:** Visit `http://localhost/0112420437_suchak/ques2/q2.php`. Enter the room type in the **second Room Type field** as `Standard`, `Deluxe`, or `Suite`; the dropdown is not connected to the calculation. Enter the nights and guest count, then select **Calculate**.
3. **Question 3:** Create a database named `bd_cricket` and import `ques3/match_performance.sql` into it (for example, through phpMyAdmin). Then visit `http://localhost/0112420437_suchak/ques3/q3.php`. The PHP file connects to `127.0.0.1:3306` as MySQL user `root` with an empty password; change those values in `q3.php` if your setup differs.

## Calculation and query details

### Question 1: cart

The page keeps a running item list, quantity, and subtotal. It applies a 5% discount when the subtotal reaches BDT 2,000, or 10% when it reaches BDT 5,000. It then adds 5% VAT to the discounted subtotal. A total quantity over 20 displays a bulk order/free delivery message.

### Question 2: hotel bill

The weekday rate is BDT 3,000 for Standard, BDT 5,000 for Deluxe, and BDT 8,000 for Suite. Weekend nights cost 25% more. A stay of at least 3 nights gets 5% off the room charge; at least 7 nights gets 10% off. The calculation adds BDT 800 per extra guest beyond two, per night, then applies 15% VAT to the result.

### Question 3: cricket data

The SQL file creates the `match_performance` table and inserts six sample records. The PHP page displays four query sections: venue counts and average runs above 50; all records after increasing Mirpur runs by 5%; player strike rates; and team based above/below par labels.

**Running Question 3 changes the data:** every page load increases the stored `Runs` value for Mirpur records by 5% again. To restore the sample values, drop the `match_performance` table and import the SQL file again. The SQL dump creates the table but does not create the `bd_cricket` database.

## Current limitations

- Question 1 reports invalid input, but the current script still adds that input to its running totals before showing the error.
- Question 2 uses the text Room Type field, and its guest charge calculation can become negative when fewer than two guests are entered.
- Some Question 3 queries select columns that are not grouped or aggregated; their output can vary by SQL configuration, and strict `ONLY_FULL_GROUP_BY` mode can reject them.
