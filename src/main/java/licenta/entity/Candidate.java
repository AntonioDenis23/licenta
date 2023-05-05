package licenta.entity;

import lombok.Data;

import javax.persistence.*;
import java.util.List;

@Entity
@Table(name = "candidates_table")
@Data
public class Candidate {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private long id;

    @Column(name = "topic_name")
    private String name;

    @Column(name = "votes")
    private int votes;

    @Column(name = "last_name")
    private String lastName;

    @Column(name = "first_name")
    private String firstName;

    @ManyToMany()
    List<Elections> elections;

    public void increaseVotes(){
        votes+=1;
    }
}
