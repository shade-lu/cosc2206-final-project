# COSC2206 Final Project

## Purpose of this project

This project was meant to illustrate my knowledge from COSC2206: Internet Tools. This being the final project, it was meant to show the accumulation of what
I had learned up to that point. We were given liberty on what the content of that website could be. I chose to make a website that works as a tool for playing
the video game *Dark Souls*.

## What does this tool do?

Dark Souls is an action adventure game released in 2011 and later remastered for newer consoles in 2018. A game mechanic known
as Equip Load governs the speed at which the character is able to perform a dodge roll among other things. The speed at which the character rolls also
governs the amount of i-frames (invincible frames) the character receives during the roll. Players will often build their characters around this mechanic
to achieve the optimal speed at which to dodge roll without compromising the rest of their character. The speed of a dodge roll is based off of the
characters Equip Burden (comprised of the summation of the weight of the characters equipped armour and weapons) divided by their current Endurance stat
\+ 40 (a number which can be increased by leveling up). The quotient of this division is known as the Encumbrance Level. If the encumbrance level is 0, the
character receives the fastest roll possible. If it is below 0.25 (i.e. 25%), the character will experience what is colloquially known as a fast roll. If
below 0.5 but above 0.25 they will experience a medium roll, and if below 1 but above 0.5 they will experience a slow roll. An encumbrance level above
1.0 deactivates the ability to roll. The tool offered by this website allows players to enter in the weapons and armour they may have equipped,
as well as their current endurance stat to quickly gather how fast their roll is.

## Development Info

Updates are/were being made to this project following its due date. Mobile friendliness and improved security are among these updates.
