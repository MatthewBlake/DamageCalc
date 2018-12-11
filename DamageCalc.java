import java.util.*;
import java.io.*;
import java.awt.*;
import com.fasterxml.jackson.core.JsonParser;
import com.fasterxml.jackson.databind.*;
import com.fasterxml.jackson.annotation.*;

public class DamageCalc{
	public static void main(String [] args){

		//										none 	normal	grass	fire 	water 	electric	ice 	flying	bug		poison	ground	rock	fighting	psychic	ghost	dragon	dark	steel 	fairy
		Type none		= new Type("None", 		1, 		1,		1,		1, 		1, 		1,			1, 		1, 		1, 		1, 		1, 		1, 		1,			1,		1, 		1, 		1, 		1, 		1);
		Type normal		= new Type("Normal",	1,		1,		1,		1, 		1, 		1, 			1, 		1, 		1, 		1, 		1, 		0.5, 	1, 			1,		0, 		1, 		1, 		0.5, 	1);
		Type grass		= new Type("Grass",		1,		1,		0.5,	0.5, 	2, 		1,			1, 		0.5, 	0.5, 	0.5, 	2, 		2, 		1, 			1, 		1, 		0.5, 	1, 		0.5, 	1);
		Type fire		= new Type("Fire",		1,		1,		2,		0.5,	0.5,	1,			2,		1,		2,		1,		1,		0.5,	1,			1,		1,		0.5,	1,		2,		1);
		Type water		= new Type("Water",		1,		1,		0.5,	2,		0.5,	1,			1,		1,		1,		1,		2,		2,		1,			1,		1,		0.5,	1,		1,		1);
		Type electric	= new Type("Electric",	1,		1,		0.5,	1,		2,		0.5,		1,		2,		1,		1,		0,		1,		1,			1,		1,		0.5,	1,		1,		1);
		Type ice		= new Type("Ice",		1,		1,		2,		0.5,	0.5,	1,			0.5,	2,		1,		1,		2,		1,		1,			1,		1,		2,		1,		0.5,	1);
		Type flying		= new Type("Flying",	1,		1,		2,		1,		1,		0.5,		1,		1,		2,		1,		1,		0.5,	2,			1,		1,		1,		1,		0.5,	1);
		Type bug		= new Type("Bug",		1,		1,		2,		0.5,	1,		1,			1,		0.5,	1,		0.5,	1,		1,		0.5,		2,		0.5,	1,		2,		0.5,	0.5);
		Type poison		= new Type("Poison",	1,		1,		2,		1,		1,		1,			1,		1,		1,		0.5,	0.5,	0.5,	1,			1,		0.5,	1,		1,		0,		2);
		Type ground		= new Type("Ground",	1,		1,		0.5,	2,		1,		2,			1,		0,		0.5,	2,		1,		2,		1,			1,		1,		1,		1,		2,		1);
		Type rock		= new Type("Rock",		1,		1,		1,		2,		1,		1,			2,		2,		2,		1,		0.5,	1,		0.5,		1,		1,		1,		1,		0.5,	1);
		Type fighting	= new Type("Fighting",	1,		2,		1,		1,		1,		1,			2,		0.5,	0.5,	0.5,	1,		2,		1,			0.5,	0,		1,		2,		2,		0.5);
		Type psychic	= new Type("Psychic",	1,		1,		1,		1,		1,		1,			1,		1,		1,		2,		1,		1,		2,			0.5,	1,		1,		0,		0.5,	1);
		Type ghost		= new Type("Ghost",		1,		0,		1,		1,		1,		1,			1,		1,		1,		1,		1,		1,		1,			2,		2,		1,		0.5,	1,		1);
		Type dragon		= new Type("Dragon",	1,		1,		1,		1,		1,		1,			1,		1,		1,		1,		1,		1,		1,			1,		1,		2,		1,		0.5,	0);
		Type dark		= new Type("Dark",		1,		1,		1,		1,		1,		1,			1,		1,		1,		1,		1,		1,		0.5,		2,		2,		1,		0.5,	1,		0.5);
		Type steel		= new Type("Steel",		1,		1,		1,		0.5,	0.5,	0.5,		2,		1,		1,		1,		1,		2,		1,			1,		1,		1,		1,		0.5,	2);
		Type fairy		= new Type("Fairy",		1,		1,		1,		0.5,	1,		1,			1,		1,		1,		0.5,	1,		1,		2,			1,		1,		2,		2,		0.5,	1);

		ArrayList<Pokemon> mons = new ArrayList<Pokemon>();
		ArrayList<Moves> moveset = new ArrayList<Moves>();

		Moves move1 = new Moves("Energy Ball", 	grass, 	90);
		Moves move2 = new Moves("Sludge Bomb", 	poison, 90);
		Moves move3 = new Moves("Hidden Power", fire, 	60);
		Moves move4 = new Moves("Knock Off", 	dark, 	65);

		moveset.add(move1);
		moveset.add(move2);
		moveset.add(move3);
		moveset.add(move4);

		Pokemon venusaur		= new Pokemon("Venusaur",		grass,		poison, 	80, 	82, 	83, 	100, 	100, 	80, 	moveset);
		Pokemon blastoise		= new Pokemon("Blastoise",		water,		none, 		79, 	83, 	100,	85, 	105, 	78, 	moveset);

		mons.add(venusaur);
		mons.add(blastoise);

		try{
			File newState = new File("fileName.json");

			ObjectMapper mapper = new ObjectMapper();
			mapper.configure(SerializationFeature.FAIL_ON_EMPTY_BEANS, false);

			for(int i = 0; i < mons.size(); i++){
				mapper.writeValue(newState, mons);
			}

			java.awt.Desktop.getDesktop().browse(java.net.URI.create("http://localhost/DamageCalc/DamageCalc.php"));
		}

		catch(IOException e){
			e.printStackTrace();
		}
	}
}