import random
p1score = 0
p2score = 0
player = 0
currentrolep1 = 0
currentrolep2 = 0
currentturnp1 = 0
currentturnp2 = 0
rolesp1 = 0
rolesp2 = 0
while (p1score < 100 and p2score < 100):
    player = 1
    currentturnp1 += 1
    currentturnp2 += 1
    role = 0
    if (player == 1):
        damb = random.randint(1, 6)
        print("you rolled a: " + str(damb))
        if (damb != 1):
            p1score += damb
            while (role != 1):
                darn = input("do you wish to role or hold? (r/h) ")
                if (darn == "r" or darn == "R"):
                    oof = random.randint(1, 6)
                    print("you rolled a: " + str(role))
                    if (oof == 1):
                        role = 1
                    else:
                        role = oof
                        p1score += oof
                else:
                    player = 2
                    print("PLAYER 1 score = " + str(p1score))
        else:
            print("PLAYER 1 score = " + str(p1score))
            player = 2
    #if (player == 2):

if (p1score > p2score):
    print("PLAYER 1 Wins!")
elif (p2score > p1score):
    print("PLAYER 2 Wins!")