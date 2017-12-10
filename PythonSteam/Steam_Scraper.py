# Instructions:
# https://www.youtube.com/watch?v=XQgXKtPSzUI

#  If not Recknoised VVVVVVVV
# set PATH=%PATH%;C:\Python34\Scripts
# set PATH=%PATH%;C:\Python34


#pip install bs4
#python
import bs4
from urllib.request import urlopen as uReq
from bs4 import BeautifulSoup as soup


my_url = 'http://store.steampowered.com/search/?filter=topsellers&category1=998,996'

# opening connection, taking the page
uClient = uReq(my_url)
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

headers = "game, price, release date, game link, game image \n"

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

		print("Game Name: " + product_name)
	#	print("Price:" + price)
		print("Release Date: " + rldate)
		print("Game Link: " + game_link)
		print("Game Image " + game_image)





		f.write(product_name + "," +
		# price.replace(",",".")  + 
		(",") +
		 rldate +(",")+ 
		 game_link +(",")+
		 game_image + 
		 "\n"  )



f.close()

