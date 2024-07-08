CREATE SCHEMA transactions;
USE transactions;

CREATE TABLE accounts(
number INT,
balance FLOAT,
PRIMARY KEY(number)
) ENGINE InnoDB;

DESCRIBE accounts;

INSERT INTO accounts(number, balance) VALUES(12345, 1025.50);
INSERT INTO accounts(number, balance) VALUES(67890, 140.00);

SELECT * FROM accounts;

-- USING BEGIN
/*
Trabsactions in MySQL start with either a BEGIN or a START TRANSACTION 
statement.
*/
BEGIN;
UPDATE accounts SET balance=balance+25.11 WHERE NUMBER = 12345;
COMMIT;
SELECT * FROM accounts;

/*
Using COMMIT
When you are satisfied that a series of queries in a transaction has 
successfully completed, issue a COMMIT command to commit all the changes 
to the database.
Until it receives a COMMIT, MySQL considers all the changes you make to
merely temporary. This feature gives you the opportunity to cancel a 
transaction by not sending a COMMIT but issuing a ROLLBACK command 
instead.
*/


/*
Using ROLLBACK
Using the ROLLBACK ommand, you can tell MySQL to forget all the queries
made since the start of a transaction and to cancel the transaction.
See this in action by entering the funds transfer transaction.
*/

BEGIN;
UPDATE accounts SET balance=balance-250 WHERE number=12345;
UPDATE accounts SET balance=balance+250 WHERE number=67890;
SELECT * FROM accounts;

-- But let's assume that something went wrong and you wish to undo this
-- transaction. All you have to do issue the command ROLLBACK.

ROLLBACK;
SELECT * FROM accounts;

/*
Using EXPLAIN
Using EXPLAIN, you can get a snapshot of any query to find out whether
you could issue it in a better or more efficient way.
*/

EXPLAIN SELECT * FROM ACCOUNTS where NUMBER ='12345';

/*
The information that MySQL is giving you here is as follows:
select_type
The selection type is SIMPLE. If you were joining tables together, this would show the join type.
table 
The current table being queried is accounts. 
type
The query type is const. From the least efficient to the most efficient type, the possible values can be ALL, index, range, ref, eq_ref, const, system, and NULL.
possible_keys 
There is a possible PRIMARY key, which means that accessing should be fast.
key
The key actually used is PRIMARY. This is good.
key_len 
The key length is 4. This is the number of bytes of the index that MySQL will use.
ref
The ref column displays which columns or constants are used with the key. In this case, a constant key is being used.
rows 
The number of rows that need to be searched by this query is 1. This is good.
*/


/*
Using mysqldump

*/
