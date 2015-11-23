

CREATE TABLE UserInfo
(
UserId int UNIQUE,
FirstName varchar(255),
LastName varchar(255),
email varchar(255) NOT NULL ,
password varchar(255) NOT NULL,
-- RewardPoints BOOLEAN,
-- Street varchar(255),
City varchar(255),
state varchar(255) ,
zip varchar(255) NOT NULL,
Type varchar(100),                -- Billing and Shipping Address
Flag BOOLEAN,                     -- 1 if both the address are same
IssueDate date,
ExpiryDate date,
VisaCompanyName varchar(255),
cardNumber int,
TypeOfCard char,
PRIMARY_KEY (CustomerId)
);

CREATE TABLE Products
(
ProductId varchar(100),
ProductName varchar(255) NOT NULL,
ProductType varchar(100),
Price int,
Quantity int,
Stock int,                --  For TopSeller products display
ProductReview int,        -- For TopRated Items
UNIQUE (ProductId),
PRIMARY_KEY (ProductId)
);

CREATE TABLE TryCount
(
BillId int,
ProductId varchar(100),
Count int
);

CREATE TABLE CustomerShoppingInfo
(
BillId int,
CustomerId int,
ProductId varchar(100),
);

CREATE TABLE CartInfo
(
BillId int,
ProductId varchar(100),
Count int,
);
