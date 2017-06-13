# checks if a branch is open or not at current time.
# cities: New York City, Portland & London

from datetime import  datetime
from pytz import timezone


def branch():    
    timezones = ['US/Eastern','US/Pacific','Europe/London']
    for zone in timezones:
        nowTime = [datetime.now(timezone(zone))]       
        for timeNow in nowTime:
            BranchTime=int(timeNow.strftime('%H'))
            if BranchTime > 8 and BranchTime < 21:
                print(zone,'OPEN',timeNow)
            else:
                print(zone,'CLOSED',timeNow)
branch()



