# sqli-vulnerable-labs
sqli vulnerable labs
Retrieving hidden data, where you can modify an SQL query to return additional results.
Subverting application logic, where you can change a query to interfere with the application's logic.
UNION attacks, where you can retrieve data from different database tables.
Examining the database, where you can extract information about the version and structure of the database.
Blind SQL injection, where the results of a query you control are not returned in the application's responses.


# DOM XSS in jQuery selector  - lab
Auto-scrolling to a specific location on a web page using the location.hash property and jQuery&#39;s
$() selector function does not inherently pose a security vulnerability. However, if an attacker is
able to manipulate the location.hash property (by for example, injecting it via a malicious link or
script), they could potentially use it to scroll the user to a hidden or malicious element on the
page, such as an iframe containing a phishing site or a hidden form that captures sensitive
information. To mitigate this type of attack, it&#39;s important to validate user input, sanitize it and
ensure that it cannot be used to manipulate the DOM in unexpected ways.

# Cross Site Request Forgery (CSRF)  - lab
In a CSRF attack, an attacker may try to change the values of a form on a website that the victim
is currently authenticated to, in order to perform an unwanted action.
One way this can be done is by exploiting a vulnerability in the way the website manages session
data. For example, if the website does not properly validate the authenticity of the session data,
an attacker could potentially use a stolen session ID to change the values of a form and perform
an unwanted action. To detect and diagnose this type of attack, web application logs can be used
to track user actions on the website, including any suspicious or unauthorized actions. For
example, if the website logs the IP address, user agent, and other details of each request, an
administrator can look for any requests that were made using a different IP address or user agent
than the victim&#39;s legitimate requests.
Additionally, if the website logs the values of the form data and compare it with the session data,
an administrator can look for any requests that have been submitted with different form data than
what was expected.
Also, some web application firewalls (WAFs) and intrusion detection systems (IDS) can be
configured to detect and block requests that are suspected to be part of a CSRF attack, based on
certain characteristics of the request, such as the presence of a certain cookie or header.
Overall, its important to have a comprehensive logging and monitoring system in place that
tracks user activity, detect suspicious behavior and notify the administrator.
