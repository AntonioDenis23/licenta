package licenta.entity;

import com.fasterxml.jackson.annotation.JsonIgnore;
import lombok.Data;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToMany;
import javax.persistence.Table;
import java.util.ArrayList;
import java.util.List;

@Entity
@Table(name = "candidates_table")
@Data
public class Candidate {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private long id;

    @Column(name = "candidate_name")
    private String name;

    @Column(name = "votes")
    private int votes;

    @Column(name = "last_name")
    private String lastName;

    @Column(name = "first_name")
    private String firstName;

    @Column(name = "job")
    private String job;

    @Column(name = "about")
    private String about;


    @ManyToMany(fetch = FetchType.EAGER)
    @JsonIgnore
    List<Elections> elections = new ArrayList<>();

    public void increaseVotes() {
        votes += 1;
    }
}
