GoogleAppEngine_Sample
=========


Using AppEngine for Serving Dynamic Web Content

Google AppEngine web services used -
1. Google User Management -
The web service can detect whether the current user has signed in, and can redirect the user to the appropriate sign-in page.
2. Memcache -
It is used to speed up common datastore queries.
What the service does -

The web service finds the ascii value of any given character,digit,symbol or a string.
Example, If user gives supi, the php code adds up all the ascii value in the string and returns 449.
This web service serves only the authentic google users and this is taken care by Google User Management.
If a user searches for already searched string,character,digit or symbol; the service fetches the result from the cache rather than computing it again. Suppose the user searches for a new string,character,digit or symbol; it stores the result in cache. This is handled by Memcache.

