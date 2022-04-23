-- Link: https://www.hackerrank.com/challenges/average-population-of-each-continent/problem
-- Problem: Average Population of Each Continent
SELECT COUNTRY.CONTINENT,
    FLOOR(AVG(CITY.POPULATION))
FROM CITY
    INNER JOIN COUNTRY ON CITY.COUNTRYCODE = COUNTRY.CODE
GROUP BY COUNTRY.CONTINENT;