# Instructions:
# https://www.youtube.com/watch?v=XQgXKtPSzUI

#  If not Recknoised VVVVVVVV
# set PATH=%PATH%;C:\Python34\Scripts
# set PATH=%PATH%;C:\Python34


#pip install bs4
#pip install requests
#python
import sys
reload(sys)
sys.setdefaultencoding('utf-8')
import bs4
from urllib2 import urlopen as uReq
from bs4 import BeautifulSoup as soup

import requests
cookies = { 'birthtime': '-2208989360', 'mature_content': '1' }
r = requests.get('http://store.steampowered.com/', cookies=cookies)

my_url = 'http://store.steampowered.com/search/?category1=998&os=win&filter=topsellers'
my_url2 = 'http://store.steampowered.com/search/?category1=998&os=win&filter=topsellers&page=2'

uClient = uReq(my_url)
page_html = uClient.read()
uClient.close()

page_soup = soup(page_html,"html.parser")
 
# Grabs Each Product
containers = page_soup.findAll("div",{"id":"search_result_container"})

# opening connection, taking the page
uClient = uReq(my_url2)
page_html = uClient.read()
uClient.close()

# Parsing
page_soup = soup(page_html,"html.parser")
 
# Grabs Each Product
containers = page_soup.findAll("div",{"id":"search_result_container"})

#All of the page
#Containers[0]

# 1 Product

#container = containers[0]
#container.a

 

#Loop 

filename = "games.xml"
f = open(filename, "w")

headers = "<GameInfo>"+"\n"
footer = "</GameInfo>"

f.write(headers)


for container in containers:
	for i in range(30):

#First Product

#Game Name
		title_container = container.findAll("div",{"class":"col search_name ellipsis"})
		product_name = title_container[i].text
#Game Price
		#col search_price discounted responsive_secondrow
		#col search_price responsive_secondrow
		#game_price = container.findAll("div",{"class":"col search_discount responsive_secondrow"})	
		#price =	game_price[i].text 
		#if (price == " "):
		#	game_price = container.findAll("div",{"class":"search_price responsive_secondrow"})	
	#	price =	game_price[i].text 
	#	else:
	#		price =	game_price[i].text 
#Tags
		release_date = container.findAll("div",{"class":"col search_released responsive_secondrow"})
		rldate = release_date[i].text
#Game Link
		game_link = container.findAll('a')[i].get('href')

#Image
		game_image = container.findAll('img')[i].get('src')
		product_name = ' '.join(product_name.split())
	#	price = ' '.join(price.split())

		uClient = uReq(game_link)
		price_html = uClient.read()
		uClient.close()

		page_price = soup(price_html,"html.parser")
 	
		pricing = page_price.findAll("div",{"class":"responsive_page_frame with_header"})

	#	for price in pricing:

	#		if price.find(div="discount_final_price"):
#				game_price = price.findAll("div",{"class":'discount_final_price'})
	#			gamprice = game_price[i].text
#				print("Price:" + game_price)	
	#		elif price.find(div="game_purchase_price price"):
#				game_price = price.findAll("div",{"class":'game_purchase_price price'})
#				gamprice = game_price[i].text
#				print("Price:" + game_price)

	#		else:
#				break

		f.write(" <Games>"+"\n"+"  <GameName>"+product_name+"</GameName>"+"\n"+
		                        "  <GamePrice>"+""+"</GamePrice>"+"\n"+
		                        "  <GameDate>"+rldate+"</GameDate>"+"\n"+
		                        "  <GameLink>"+game_link+"</GameLink>"+"\n"+
		                        "  <GameImgUrl>"+game_image+"</GameImgUrl>"+"\n"+
		                        " </Games>"+"\n")


f.write(footer)
f.close()

my_url2 = "http://store.steampowered.com/search/?category1=998&os=win&filter=topsellers&page=2"

# opening connection, taking the page
uClient = uReq(my_url2)
page_html = uClient.read()
uClient.close()

# Parsing
page_soup = soup(page_html,"html.parser")
 
# Grabs Each Product
containers = page_soup.findAll("div",{"id":"search_result_container"})

#All of the page
#Containers[0]

# 1 Product

#container = containers[0]
#container.a

 

#Loop 

filename = "games.xml"
f = open(filename, "w")

headers = "<GameInfo>"+"\n"
footer = "</GameInfo>"

f.write(headers)


for container in containers:
	for i in range(19):

#First Product

#Game Name
		title_container = container.findAll("div",{"class":"col search_name ellipsis"})
		product_name = title_container[i].text
#Game Price
		#col search_price discounted responsive_secondrow
		#col search_price responsive_secondrow
		#game_price = container.findAll("div",{"class":"col search_discount responsive_secondrow"})	
		#price =	game_price[i].text 
		#if (price == " "):
		#	game_price = container.findAll("div",{"class":"search_price responsive_secondrow"})	
	#	price =	game_price[i].text 
	#	else:
	#		price =	game_price[i].text 
#Tags
		release_date = container.findAll("div",{"class":"col search_released responsive_secondrow"})
		rldate = release_date[i].text
#Game Link
		game_link = container.findAll('a')[i].get('href')

#Image
		game_image = container.findAll('img')[i].get('src')
		product_name = ' '.join(product_name.split())
	#	price = ' '.join(price.split())

		uClient = uReq(game_link)
		price_html = uClient.read()
		uClient.close()

		page_price = soup(price_html,"html.parser")
 	
		pricing = page_price.findAll("div",{"class":"responsive_page_frame with_header"})

	#	for price in pricing:

	#		if price.find(div="discount_final_price"):
#				game_price = price.findAll("div",{"class":'discount_final_price'})
	#			gamprice = game_price[i].text
#				print("Price:" + game_price)	
	#		elif price.find(div="game_purchase_price price"):
#				game_price = price.findAll("div",{"class":'game_purchase_price price'})
#				gamprice = game_price[i].text
#				print("Price:" + game_price)

	#		else:
#				break

		f.write(" <Games>"+"\n"+"  <GameName>"+product_name+"</GameName>"+"\n"+
		                        "  <GamePrice>"+""+"</GamePrice>"+"\n"+
		                        "  <GameDate>"+rldate+"</GameDate>"+"\n"+
		                        "  <GameLink>"+game_link+"</GameLink>"+"\n"+
		                        "  <GameImgUrl>"+game_image+"</GameImgUrl>"+"\n"+
		                        " </Games>"+"\n")
