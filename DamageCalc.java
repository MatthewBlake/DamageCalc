import java.util.*;
import java.io.*;
import java.awt.*;
import com.fasterxml.jackson.core.JsonParser;
import com.fasterxml.jackson.databind.*;
import com.fasterxml.jackson.annotation.*;

public class DamageCalc{
	public static void main(String [] args){

		//														none 	normal	grass	fire 	water 	electric	ice 	flying	bug		poison	ground	rock	fighting	psychic	ghost	dragon	dark	steel 	fairy
		Type none		= new Type("None", 		"lightgrey",	1, 		1,		1,		1, 		1, 		1,			1, 		1, 		1, 		1, 		1, 		1, 		1,			1,		1, 		1, 		1, 		1, 		1);
		Type normal		= new Type("Normal",	"#A8A878",		1,		1,		1,		1, 		1, 		1, 			1, 		1, 		1, 		1, 		1, 		0.5, 	1, 			1,		0, 		1, 		1, 		0.5, 	1);
		Type grass		= new Type("Grass",		"#78C850",		1,		1,		0.5,	0.5, 	2, 		1,			1, 		0.5, 	0.5, 	0.5, 	2, 		2, 		1, 			1, 		1, 		0.5, 	1, 		0.5, 	1);
		Type fire		= new Type("Fire",		"#F08030",		1,		1,		2,		0.5,	0.5,	1,			2,		1,		2,		1,		1,		0.5,	1,			1,		1,		0.5,	1,		2,		1);
		Type water		= new Type("Water",		"#6890F0",		1,		1,		0.5,	2,		0.5,	1,			1,		1,		1,		1,		2,		2,		1,			1,		1,		0.5,	1,		1,		1);
		Type electric	= new Type("Electric",	"#F8D030",		1,		1,		0.5,	1,		2,		0.5,		1,		2,		1,		1,		0,		1,		1,			1,		1,		0.5,	1,		1,		1);
		Type ice		= new Type("Ice",		"#98D8D8",		1,		1,		2,		0.5,	0.5,	1,			0.5,	2,		1,		1,		2,		1,		1,			1,		1,		2,		1,		0.5,	1);
		Type flying		= new Type("Flying",	"#A890F0",		1,		1,		2,		1,		1,		0.5,		1,		1,		2,		1,		1,		0.5,	2,			1,		1,		1,		1,		0.5,	1);
		Type bug		= new Type("Bug",		"#A8B820",		1,		1,		2,		0.5,	1,		1,			1,		0.5,	1,		0.5,	1,		1,		0.5,		2,		0.5,	1,		2,		0.5,	0.5);
		Type poison		= new Type("Poison",	"#A040A0",		1,		1,		2,		1,		1,		1,			1,		1,		1,		0.5,	0.5,	0.5,	1,			1,		0.5,	1,		1,		0,		2);
		Type ground		= new Type("Ground",	"#E0C068",		1,		1,		0.5,	2,		1,		2,			1,		0,		0.5,	2,		1,		2,		1,			1,		1,		1,		1,		2,		1);
		Type rock		= new Type("Rock",		"#B8A038",		1,		1,		1,		2,		1,		1,			2,		2,		2,		1,		0.5,	1,		0.5,		1,		1,		1,		1,		0.5,	1);
		Type fighting	= new Type("Fighting",	"#C03028",		1,		2,		1,		1,		1,		1,			2,		0.5,	0.5,	0.5,	1,		2,		1,			0.5,	0,		1,		2,		2,		0.5);
		Type psychic	= new Type("Psychic",	"#F85888",		1,		1,		1,		1,		1,		1,			1,		1,		1,		2,		1,		1,		2,			0.5,	1,		1,		0,		0.5,	1);
		Type ghost		= new Type("Ghost",		"#705898",		1,		0,		1,		1,		1,		1,			1,		1,		1,		1,		1,		1,		1,			2,		2,		1,		0.5,	1,		1);
		Type dragon		= new Type("Dragon",	"#7038F8",		1,		1,		1,		1,		1,		1,			1,		1,		1,		1,		1,		1,		1,			1,		1,		2,		1,		0.5,	0);
		Type dark		= new Type("Dark",		"#705848",		1,		1,		1,		1,		1,		1,			1,		1,		1,		1,		1,		1,		0.5,		2,		2,		1,		0.5,	1,		0.5);
		Type steel		= new Type("Steel",		"#B8B8D0",		1,		1,		1,		0.5,	0.5,	0.5,		2,		1,		1,		1,		1,		2,		1,			1,		1,		1,		1,		0.5,	2);
		Type fairy		= new Type("Fairy",		"#EE99AC",		1,		1,		1,		0.5,	1,		1,			1,		1,		1,		0.5,	1,		1,		2,			1,		1,		2,		2,		0.5,	1);

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

		Pokemon venusaur		= new Pokemon("Venusaur",		grass,		poison, 	80, 	82, 	83, 	100, 	100, 	80,		moveset);
		Pokemon blastoise		= new Pokemon("Blastoise",		water,		none, 		79, 	83, 	100,	85, 	105, 	78,		moveset);
		Pokemon charizard		= new Pokemon("Charizard",		fire,		flying,		78,		84,		78,		109,	85,		100,	moveset);
		Pokemon butterfree		= new Pokemon("Butterfree",		bug,		flying,		60, 	45, 	50,		90, 	80, 	70,		moveset);
		Pokemon beedrill		= new Pokemon("Beedrill",		bug,		poison, 	65, 	90, 	40, 	45, 	80, 	75,		moveset);
		Pokemon pidgeot			= new Pokemon("Pidgeot",		normal,		flying,		83,		80,		75,		70,		70,		101,	moveset);


		mons.add(venusaur);
		mons.add(blastoise);
		mons.add(charizard);
		mons.add(butterfree);
		mons.add(beedrill);
		mons.add(pidgeot);

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