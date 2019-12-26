from multiprocessing import Pool
import csv
from datetime import datetime
import requests
from bs4 import BeautifulSoup


def get_html(url):
    response = requests.get(url)
    return response.text


def get_all_links(html):
    soup = BeautifulSoup(html, 'lxml')
    tds = soup.find('ul', class_='entity').find_all('div', class_='media-body')
    links = []
    for td in tds:
        a = td.find('a').get('href')
        link = 'https://1ml.com' + a
        links.append(link)
    return links


def text_before_word(text, word):
    line = text.split(word)[0].strip()
    return line


def get_page_data(html):
    soup = BeautifulSoup(html, 'lxml')
    try:
        name = soup.find('h1').text
    except:
        name = ''
    try:
        str = soup.find('div', class_='panel-body').text.split('\n')
    except:
        str = ''
    try:
        str1 = soup.find('div', class_='nodeRank').text.split('\n')
    except:
        str1 = ''

    price_BTC = str[4]
    price_dollar = str[8][:-2].replace(' ', '')
    channel_count = str[50]
    capacity_rank = str1[3]
    channel_rank = str1[5]
    age_rank = str1[7]

    data = [name, price_BTC, price_dollar, channel_count, capacity_rank, channel_rank, age_rank]
    print(data)
    return data


def make_all(link):
    html = get_html(link)
    data = get_page_data(html)


def main():
    start = datetime.now()
    url = 'https://1ml.com/directory/groceries/5dcb5793-e2a8-4bb3-8b54-ae0b5c32b14e'
    all_links = get_all_links(get_html(url))

    with Pool(10) as p:
        p.map(make_all, all_links)

    end = datetime.now()
    total = end - start
    print(str(total))
    a = input()


if __name__ == '__main__':
    main()
